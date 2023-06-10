<?php

namespace App\Http\Controllers;

use App\Mail\OtpEmail;
use App\Models\Otp;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function otp()
    {
        return view('auth.otp');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|required_with:conpass|same:conpass',
            'tempat'   => 'required',
            'ttl'       =>'required|date',
            'username' => 'required|unique:pembeli|min:8',
            'no_hp'     => 'required|unique:pembeli|min:11',
            'gender'    => 'required'

        ],[
            'nama.required' => 'Nama tidak boleh kosong!',
            'tempat.required' => 'Tempat Tanggal Lahir tidak boleh kosong!',
            'ttl.required' => 'Tanggal Lahir tidak boleh kosong!',
            'username.required' => 'Username tidak boleh kosong!',
            'username.min' => 'Minimal Usernam 8 Karakter',
            'username.unique' => 'Username Sudah Ada!',
            'gender.required' => 'Gender tidak boleh kosong!',
            'no_hp.required' => 'Nomor HP tidak boleh kosong!',
            'no_hp.min' => 'Minimal Nomor HP 11 Karakter',
            'no_hp.unique' => 'Nomor HP Sudah Ada!',
            'email.unique' => 'Email Sudah Terdaftar!',
            'email.required' => 'Email tidak boleh kosong!',
            'email.email' => 'Email Tidak Valid!',
            'email.unique' => 'Email Sudah Terdaftar!',
            'password.required' => 'Password Tidak Boleh Kosong',
            'password.min' => 'Minimal Password 8 Karakter',
            'password.same' => 'Konfirmasi Password tidak sama dengan Password'
        ]);

        // dd($request->all());
        DB::beginTransaction();
        try {

            $user = User::create([
                'name' => $validated['nama'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'status' => 'Belum'
            ]);
            
            $user->assignRole('user');


            DB::commit();
            // dd($user);
            return redirect()->route('login')->with('success', "Berhasil mendaftar");

        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->route('register')->with(['errors', 'danger'], $th->getMessage());
        }
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            "email" => 'required|email',
            "password" => 'required|min:8',
        ],[
            'email.required' =>  'Email Tidak Boleh Kosong',
            'email.email' => 'Alamat Email Tidak Valid',
            'password.required' => 'Password Tidak Boleh Kosong',
            'password.min' => 'Minimal Password 8 Karakter'
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];
        try {
            Auth::attempt($credential);
            if (Auth::user()) {
                if (Auth::user()->getRoleNames()[0] == 'user') {

                    if (Auth::user()->status == 'Belum') {
                        # Generate An OTP
                        $verificationCode = $this->generateOtp(Auth::user()->email);

                        $message = "Your OTP To Login is - ".$verificationCode->otp;
                        # Return With OTP 

                        return redirect()->route('otp', ['user_id' => $verificationCode->user_id])->with('success',  $message); 
                    } else {
                        return redirect()->route('user.dashboard.index')->with('success', 'Selamat Datang');
                    }
                    
                }
                if (Auth::user()->getRoleNames()[0] == 'admin') {
                    return redirect()->route('admin.dashboard.index');
                    
                }
            }
            else {
                return redirect()->back()->with('danger', 'Username / Password Salah !');
            }
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('danger', $th->getMessage());
        }
    }
    
    public function postLogout()
    {
        Auth::logout();
        return redirect('/');
    }

    
    public function generateOtp($email)
    {
        $user = User::where('email', $email)->first();

        # User Does not Have Any Existing OTP
        $verificationCode = Otp::where('user_id', $user->id)->latest()->first();

        $now = Carbon::now();

        if($verificationCode && $now->isBefore($verificationCode->expire_at)){
            return $verificationCode;
        }

        // Create a New OTP
        return  $this->send($user);
    }

    public function send($user)
    {
        $otp =  Otp::create([
            'user_id' => $user->id,
            'otp' => rand(123456, 999999),
            'expire_at' => Carbon::now()->addMinutes(10)
        ]);
        
        $data = [
            'otp' => $otp,
            'subject' => 'Reset Password Notification',
        ];

        Mail::to($user->email)->send(new OtpEmail($data));

        return $data;
    }

    public function verifikasi(Request $request)
    {
        // dd($request->all());
        #Validation
        $request->validate([
            'otp' => 'required'
        ]);

        #Validation Logic
        $verificationCode   = Otp::where('user_id', Auth::user()->id)->where('otp', $request->otp)->first();

        $now = Carbon::now();
        if (!$verificationCode) {
            return redirect()->back()->with('error', 'Your OTP is not correct');
        }elseif($verificationCode && $now->isAfter($verificationCode->expire_at)){
            return redirect()->route('login')->with('error', 'Your OTP has been expired');
        }

        $user = User::whereId(Auth::user()->id)->first();

        // dd($user);

        if($user){
            // Expire The OTP
            $verificationCode->update([
                'expire_at' => Carbon::now()
            ]);
        
            $user->update([
               'status' => $request->status,
               'email_verified_at' => Carbon::now()
            ]);

            return redirect()->route('user.dashboard.index')->with('success', 'Anda berhasil verifikasi');
        }

        return redirect()->back()->with('error', 'Your Otp is not correct');
    }
}
