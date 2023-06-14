<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Wisata;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()  {    
        return view('template.admin.page.blankpage', [
        'users' => User::all(),
        'wisata' => Wisata::all(),
        ]);
    
    }
}
