<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Models\PerhitunganWisata;
use App\Http\Controllers\Controller;


class PelangganController extends Controller
{
    public function index()  {   
        $data = PerhitunganWisata::all(); 

        return view('template.admin.page.pelanggan.index', compact('data'));
    }
}
