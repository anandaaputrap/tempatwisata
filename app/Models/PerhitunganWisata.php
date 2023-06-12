<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PerhitunganWisata extends Model
{
    use HasFactory;

    public $table = 'perhitungan_wisata';

    protected $fillable = [
        'harga_tiket',
        'fasilitas',
        'jarak',
        'pelayanan',
        'suasana',
        'created_by',
        'wisata_id',
    ];

    /**
     * Get the user that owns the PerhitunganWisata
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wisata(): BelongsTo
    {
        return $this->belongsTo(Wisata::class, 'wisata_id', 'id');
    }

    /**
     * Get the user that owns the PerhitunganWisata
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
