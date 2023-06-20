<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VektorV extends Model
{
    use HasFactory;

    protected $fillable = [
        'perhitungan_id',
        'vektor_v'
    ];

    public function header(): BelongsTo
    {
        return $this->belongsTo(PerhitunganWisata::class, 'perhitungan_id', 'id');
    }
}
