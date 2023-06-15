<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class PelangganController extends Controller
{
    public function index()  {   
        $data = User::all(); 

        return view('template.admin.page.pelanggan.index', compact('data'));
    }
}
