<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\BobotKeinginan;
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
        DB::statement("SET SQL_MODE=''");
        $data = Wisata::where('status', 'Active')->get();
        $data1 = PerhitunganWisata::where('fasilitas', '5')->orwhere('fasilitas', '4')->groupBy('wisata_id')->get();
        $data2 = PerhitunganWisata::where('harga_tiket', '5')->orwhere('harga_tiket', '4')->groupBy('wisata_id')->get();
        $data3 = PerhitunganWisata::where('jarak', '5')->orwhere('jarak', '4')->groupBy('wisata_id')->get();
        $data4 = PerhitunganWisata::where('suasana', '5')->orwhere('suasana', '4')->groupBy('wisata_id')->get();
        $data5 = PerhitunganWisata::where('pelayanan', '5')->orwhere('pelayanan', '4')->groupBy('wisata_id')->get();
    
        return view('template.public.pages.destinasi', compact(['data', 'data1', 'data2', 'data3', 'data4', 'data5']));       
    }

    public function detail($id) {
        $data = Wisata::where('id', $id)->first();
        $hitungan = PerhitunganWisata::where('wisata_id', $data->id)->get();
        return view('template.public.pages.detaildestinasi', compact('data', 'hitungan'));
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
        $kriteriaFasilitas = KriteriaFasilitas::orderBy('bobot', 'DESC')->get();
        $kriteriaTiket =  KriteriaHargaTiket::orderBy('bobot', 'DESC')->get();
        $kriteriaJarak = KriteriaJarak::orderBy('bobot', 'DESC')->get();
        $kriteriaPelayanan =  KriteriaPelayanan::orderBy('bobot', 'DESC')->get();
        $kriteriaSuasana =  KriteriaSuasana::orderBy('bobot', 'DESC')->get();

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

          $total = $request->harga_tiket + $request->fasilitas + $request->jarak + $request->pelayanan + $request->suasana;

           $data =  PerhitunganWisata::create([
                'harga_tiket'=> $validation['harga_tiket'],
                'jarak' => $validation['jarak'],
                'fasilitas' => $validation['fasilitas'],
                'pelayanan' => $validation['pelayanan'],
                'suasana' => $validation['suasana'],
                'total'  => $total,
                'created_by' => $validation['created_by'],
                'wisata_id'=> $validation['wisata_id']
            ]);

            $c1 = $data->harga_tiket / $data->total;
            $c2 = $data->jarak / $data->total;
            $c3 = $data->fasilitas / $data->total;
            $c4 = $data->pelayanan / $data->total;
            $c5 = $data->suasana / $data->total;

            $wj = $c1 + $c2 + $c3 + $c4 + $c5;

            $vektors = pow($data->harga_tiket, $c1) *  pow($data->jarak, $c2) *  pow($data->fasilitas, $c3) *  pow($data->pelayanan, $c4) *  pow($data->suasana, $c5);

            BobotKeinginan::create([
                'c1'        => $c1, 
                'c2'        => $c2,  
                'c3'        => $c3,
                'c4'        => $c4, 
                'c5'        => $c5,  
                'wj'        => $wj, 
                'vektor_s'  => $vektors,
                'perhitungan_id' => $data->id
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

    public function historySurvey() 
    {
        $data = PerhitunganWisata::where('created_by', Auth::user()->id)->get();    
        return view('template.public.pages.history', compact('data'));
    }
    




    
}
