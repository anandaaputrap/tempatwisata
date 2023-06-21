<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class KriteriaFasilitas extends Model
{
    use HasFactory, SoftDeletes;
    
    public $table = 'kriteria_fasilitas';

    protected $fillable = [
        'fasilitas',
        'bobot'
    ];
}
