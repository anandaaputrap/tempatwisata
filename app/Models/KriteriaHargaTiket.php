<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KriteriaHargaTiket extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'kriteria_harga_tiket';

    protected $fillable = [
        'harga',
        'bobot',
        'keterangan'
    ];
}
