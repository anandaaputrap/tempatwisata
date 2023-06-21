<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PerhitunganWisata extends Model
{
    use HasFactory;

    public $table = 'perhitungan_wisata';

    protected $fillable = [
        'harga_tiket',
        'fasilitas',
        'jarak',
        'suasana',
        'total',
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

    /**
     * Get the user associated with the PerhitunganWisata
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function bobotKeinginan(): HasOne
    {
        return $this->hasOne(BobotKeinginan::class, 'perhitungan_id', 'id');
    }

    /**
     * Get the vektorS associated with the PerhitunganWisata
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function vektorV(): HasOne
    {
        return $this->hasOne(VektorV::class, 'perhitungan_id', 'id');
    }
}
