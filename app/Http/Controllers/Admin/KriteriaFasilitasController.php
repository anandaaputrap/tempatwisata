<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DetailKriteriaFasilitas;
use App\Models\KriteriaFasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KriteriaFasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = KriteriaFasilitas::all();

        return view('template.admin.page.fasilitas.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('template.admin.page.fasilitas.create_edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            KriteriaFasilitas::create([
                'fasilitas' => $request->fasilitas,
                'status' => 'Active'
            ]);
            DB::commit();

            return redirect()->back()->with('success', 'Berhasil Menambah Data');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return redirect()->back()->with('errors', $th->getMessage());

        }
    }

    public function createDetail($id)  
    {
        return view('template.admin.page.fasilitas.detail.create_edit', compact('id'));
    }

    public function storeDetail(Request $request)
    {
        $validation = $request->validate([
            'jawaban_a' => 'required',
            'jawaban_b' => 'required',
            'jawaban_c' => 'required',
            'jawaban_d' => 'required',
            'jawaban_e' => 'required',
            'kriteria_fasilitas_id' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $header = KriteriaFasilitas::where('id', $request->kriteria_fasilitas_id)->first();

            // dd($header);
            DetailKriteriaFasilitas::create([
                'jawaban_a' => $validation['jawaban_a'],
                'jawaban_b' => $validation['jawaban_b'],
                'jawaban_c' => $validation['jawaban_c'],
                'jawaban_d' => $validation['jawaban_d'],
                'jawaban_e' => $validation['jawaban_e'],
                'kriteria_fasilitas_id' => $header->id
            ]);
            DB::commit();

            return redirect()->back()->with('success', 'Berhasil Menambah Data');
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            DB::rollBack();
            return redirect()->back()->with('errors', $th->getMessage());

        }
    }

    
    public function editDetail($id)  
    {
        $data = DetailKriteriaFasilitas::where('kriteria_fasilitas_id', $id)->first();
        return view('template.admin.page.fasilitas.detail.create_edit', compact('data'));
    }
    
    public function updateDetail(Request $request)
    {
        $validation = $request->validate([
            'jawaban_a' => 'required',
            'jawaban_b' => 'required',
            'jawaban_c' => 'required',
            'jawaban_d' => 'required',
            'jawaban_e' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $detail = DetailKriteriaFasilitas::where('id', $request->id)->first();
            // dd($header);
           $detail->update([
                'jawaban_a' => $validation['jawaban_a'],
                'jawaban_b' => $validation['jawaban_b'],
                'jawaban_c' => $validation['jawaban_c'],
                'jawaban_d' => $validation['jawaban_d'],
                'jawaban_e' => $validation['jawaban_e']
            ]);
            DB::commit();

            return redirect()->back()->with('success', 'Berhasil Merubah Data');
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            DB::rollBack();
            return redirect()->back()->with('errors', $th->getMessage());

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = KriteriaFasilitas::where('id', $id)->first();
        return view('template.admin.page.fasilitas.create_edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $data = KriteriaFasilitas::where('id', $id)->first();

            $data->update([
                'fasilitas' => $request->fasilitas,
            ]);

            DB::commit();

            return redirect()->back()->with('success', 'Berhasil Merubah Data');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return redirect()->back()->with('errors', $th->getMessage());

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $wisata = KriteriaFasilitas::find($id);
            if ($wisata->status == 'Active') {
                $wisata->update([
                    'status' => 'Off'
                ]);
            } else {
                $wisata->update([
                    'status' => 'Active'
                ]);
            }
            return redirect()->back()->with('success','Status Berhasil di update');
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('errors', $th->getMessage());
        }
    }
}
