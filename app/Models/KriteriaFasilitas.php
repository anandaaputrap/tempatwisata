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
        'status'
    ];

    public function detail(): HasOne
    {
        return $this->hasOne(DetailKriteriaFasilitas::class, 'kriteria_fasilitas_id', 'id');
    }
}
