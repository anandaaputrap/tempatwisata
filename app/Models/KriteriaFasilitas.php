<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class KriteriaFasilitas extends Model
{
    use HasFactory;
    
    public $table = 'kriteria_fasilitas';

    protected $fillable = [
        'fasilitas',
        'status',
        'indikator',
        'jawaban_a',
        'jawaban_b',
        'jawaban_c',
        'jawaban_d',
        'jawaban_e'
    ];
}
