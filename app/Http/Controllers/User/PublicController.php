<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\KriteriaFasilitas;
use App\Models\KriteriaHargaTiket;
use App\Models\KriteriaJarak;
use App\Models\KriteriaPelayanan;
use App\Models\KriteriaSuasana;
use App\Models\PerhitunganWisata;
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

    public function survei($id) {
        $data = Wisata::where('id', $id)->first();
        $kriteriaFasilitas = KriteriaFasilitas::all();
        $kriteriaTiket =  KriteriaHargaTiket::all();
        $kriteriaJarak =  KriteriaJarak::all();
        $kriteriaPelayanan =  KriteriaPelayanan::all();
        $kriteriaSuasana =  KriteriaSuasana::all();

        return view('template.public.pages.survei', compact([
            'data',
            'kriteriaFasilitas',
            'kriteriaTiket',
            'kriteriaJarak',
            'kriteriaPelayanan',
            'kriteriaSuasana',

        ]));
    }

    public function surveiStore(Request $request) 
    {
        // dd($request->all());
        $validation = $request->validate([
            'harga_tiket' => 'required',
            'fasilitas' => 'required',
            'jarak' => 'required',
            'pelayanan' => 'required',
            'suasana' => 'required',
            'created_by' => 'required',
            'wisata_id'=> 'required',
        ]);

        DB::beginTransaction();
        try {
            PerhitunganWisata::create([
                'harga_tiket'=> $validation['harga_tiket'],
                'fasilitas' => $validation['fasilitas'],
                'jarak' => $validation['jarak'],
                'pelayanan' => $validation['pelayanan'],
                'suasana' => $validation['suasana'],
                'created_by' => $validation['created_by'],
                'wisata_id'=> $validation['wisata_id']
            ]);
            DB::commit();

            return redirect()->route('home')->with('success', 'Berhasil Menyimpan Survei');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            dd($th);
            return redirect()->back()->with('errors', $th->getMessage());

        }
    }

    public function historySurvey() {
        
        return view('template.public.pages.history');
    }
    




    
}
