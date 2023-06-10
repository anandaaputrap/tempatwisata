<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KriteriaJarak extends Model
{
    use HasFactory;
    public $table = 'kriteria_jarak';

    protected $fillable = [
        'jawaban_a',
        'jawaban_b',
        'jawaban_c',
        'jawaban_d',
        'jawaban_e',
        'status'
    ];
}
