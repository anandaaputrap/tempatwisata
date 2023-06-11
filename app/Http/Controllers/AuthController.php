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
        return view('template.public.pages.register');
    }

    public function login()
    {
        return view('template.public.pages.login');
    }

    public function otp()
    {
        return view('template.auth.otp');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'no_hp'     => 'required|unique:users|min:11',
            'gender'    => 'nullable'

        ],[
            'nama.required' => 'Nama tidak boleh kosong!',
            'no_hp.required' => 'Nomor HP tidak boleh kosong!',
            'no_hp.min' => 'Minimal Nomor HP 11 Karakter',
            'no_hp.unique' => 'Nomor HP Sudah Ada!',
            'email.unique' => 'Email Sudah Terdaftar!',
            'email.required' => 'Email tidak boleh kosong!',
            'email.email' => 'Email Tidak Valid!',
            'email.unique' => 'Email Sudah Terdaftar!',
            'password.required' => 'Password Tidak Boleh Kosong',
            'password.min' => 'Minimal Password 8 Karakter',
        ]);

        // dd($request->all());
        DB::beginTransaction();
        try {

            $user = User::create([
                'nama' => $validated['nama'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'status' => 'Belum',
                'no_hp' => $validated['no_hp'],
            ]);
            
            $user->assignRole('user');


            DB::commit();
            // dd($user);
            return redirect()->route('login')->with('success', "Berhasil mendaftar");

        } catch (\Throwable $th) {
            DB::rollback();
            dd($th);
            return redirect()->route('register')->with('errors', $th->getMessage());
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
                        
                        return redirect()->route('otp')->with('success'); 
                    } else {
                        return redirect()->route('home')->with('success', 'Selamat Datang');
                    }
                    
                }
                if (Auth::user()->getRoleNames()[0] == 'admin') {
                    return redirect()->route('admin');
                    
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
            'user' => $user->nama,
            'otp' => $otp->otp,
            'subject' => 'Kode Verifikasi (OTP)',
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
            return redirect()->back()->with('errors', 'Your OTP is not correct');
        }elseif($verificationCode && $now->isAfter($verificationCode->expire_at)){
            return redirect()->route('login')->with('errors', 'Your OTP has been expired');
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

            return redirect()->route('home')->with('success', 'Anda berhasil verifikasi');
        }

        return redirect()->back()->with('error', 'Your Otp is not correct');
    }
}
