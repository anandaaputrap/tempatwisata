<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KriteriaPelayanan extends Model
{
    use HasFactory;

    public $table = 'kriteria_pelayanan';

    protected $fillable = [
        'jawaban_a',
        'jawaban_b',
        'jawaban_c',
        'jawaban_d',
        'jawaban_e'
    ];
}
