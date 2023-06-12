<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KriteriaSuasana extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'kriteria_suasana';

    protected $fillable = [
        'suasana',
        'bobot'
    ];
}
