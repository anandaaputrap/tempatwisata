<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Wisata::all();

        return view('template.admin.page.wisata.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('template.admin.page.wisata.create_edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $val =  $request->validate([
            'file' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'nama_tempat' => 'required',
            'alamat' => 'required',
            'deskripsi' => 'required'
        ]);

        DB::beginTransaction();
        try {
            if ($request->file != null) {
                $file = $request->file('file');
                $file1 = Storage::disk('wisata')->put('wisata', $file);
            }
            Wisata::create([
                'nama_tempat' => $val['nama_tempat'],
                'alamat' => $val['alamat'],
                'deskripsi' => $val['deskripsi'],
                'foto' => $file1,
                'status' => "Active",
            ]);

            DB::commit();

            return redirect()->route('wisata.index')->with('success', 'Berhasil Menambahkan Data');
        } catch (\Throwable $th) {
            //throw $th;
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
        $data = Wisata::find($id);

        return view('template.admin.page.wisata.create_edit', compact('data'));
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
        $val =  $request->validate([
            'file' => 'image|mimes:jpg,png,jpeg|max:2048',
            'nama_tempat' => 'nullable',
            'alamat' => 'nullable',
            'deskripsi' => 'nullable'
        ]);

        DB::beginTransaction();
        try {
            $wisata = Wisata::find($id);
            if ($request->file != null) {
                $file = $request->file('file');
                $file1 = Storage::disk('wisata')->put('wisata', $file);
                $wisata->update(['foto' => $file1]);
            }

            $wisata->update([
                'nama_tempat' => $val['nama_tempat'],
                'alamat' => $val['alamat'],
                'deskripsi' => $val['deskripsi'],
            ]);

            DB::commit();

            return redirect()->route('wisata.index')->with('success', 'Berhasil Merubah Data');
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
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
            $wisata = Wisata::find($id);
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
