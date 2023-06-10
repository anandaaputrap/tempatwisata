<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;

    public $table = 'wisata';

    protected $fillable = [
        'nama_tempat',
        'alamat',
        'deskripsi',
        'status'
    ];
    
}
