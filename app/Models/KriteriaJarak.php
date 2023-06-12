<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KriteriaJarak extends Model
{
    use HasFactory, SoftDeletes;
    
    public $table = 'kriteria_jarak';

    protected $fillable = [
        'jarak',
        'bobot'
    ];
}
