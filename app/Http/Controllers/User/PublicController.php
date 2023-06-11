<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Wisata;
use Illuminate\Http\Request;

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
    
}
