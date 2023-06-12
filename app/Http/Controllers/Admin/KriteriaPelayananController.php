<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KriteriaPelayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KriteriaPelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = KriteriaPelayanan::all();
        return view('template.admin.page.pelayanan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('template.admin.page.pelayanan.create_edit');
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
            'pelayanan' => 'required',
            'bobot' => 'required'
        ]);
        DB::beginTransaction();
        try {
            KriteriaPelayanan::create([
                'pelayanan' => $validation['pelayanan'],
                'bobot' => $validation['bobot']
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
        $data = KriteriaPelayanan::where('id', $id)->first();
        return view('template.admin.page.pelayanan.create_edit', compact('data'));
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
            'pelayanan' => 'required',
            'bobot' => 'required'
        ]);
        DB::beginTransaction();
        try {
            $data = KriteriaPelayanan::where('id', $id)->first();
            
            $data->update([
                'pelayanan' => $validation['pelayanan'],
                'bobot' => $validation['bobot']
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
