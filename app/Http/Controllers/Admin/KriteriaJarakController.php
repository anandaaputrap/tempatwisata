<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KriteriaJarak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KriteriaJarakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = KriteriaJarak::first();
        return view('template.admin.page.jarak.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('template.admin.page.jarak.create_edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
            KriteriaJarak::create([
                'jawaban_a' => $validation['jawaban_a'],
                'jawaban_b' => $validation['jawaban_b'],
                'jawaban_c' => $validation['jawaban_c'],
                'jawaban_d' => $validation['jawaban_d'],
                'jawaban_e' => $validation['jawaban_e'],
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
        $data = KriteriaJarak::where('id', $id)->first();
        return view('template.admin.page.jarak.create_edit', compact('data'));
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
        $validation = $request->validate([
            'jawaban_a' => 'required',
            'jawaban_b' => 'required',
            'jawaban_c' => 'required',
            'jawaban_d' => 'required',
            'jawaban_e' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $data = KriteriaJarak::where('id', $id)->first();
            
            $data->update([
                'jawaban_a' => $validation['jawaban_a'],
                'jawaban_b' => $validation['jawaban_b'],
                'jawaban_c' => $validation['jawaban_c'],
                'jawaban_d' => $validation['jawaban_d'],
                'jawaban_e' => $validation['jawaban_e'],
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
