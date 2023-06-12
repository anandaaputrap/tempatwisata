<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    public function index() {
        $data = Wisata::all();
        return view('template.public.pages.destinasi', compact('data'));       
    }

    public function detail($id) {
        $data = Wisata::where('id', $id)->first();
        return view('template.public.pages.detaildestinasi', compact('data'));
    }

    public function profile() {
        $data = User::find(Auth::user()->id);

        return view('template.public.pages.profile', compact('data'));

    }

    public function editProfile(Request $request) {

        DB::beginTransaction();
        try {
           $user = User::find($request->id);

           $user->update([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'gender' => $request->gender,
           ]);

           DB::commit();

           return redirect()->back()->with('success', 'Berhasil Merubah Data Diri');

        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
           return redirect()->back()->with('errors', $th->getMessage());
        }

    }




    
}
