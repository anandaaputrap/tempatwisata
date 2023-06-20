<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BobotKeinginan extends Model
{
    use HasFactory;

    protected $fillable = [
        'perhitungan_id',
        'c1',
        'c2',
        'c3',
        'c4',
        'c5',
        'wj',
        'vektor_s',
    ];

    /**
     * Get the user that owns the BobotKeinginan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function header(): BelongsTo
    {
        return $this->belongsTo(PerhitunganWisata::class, 'perhitungan_id', 'id');
    }
}
