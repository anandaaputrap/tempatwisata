<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Wisata extends Model
{
    use HasFactory;

    public $table = 'wisata';

    protected $fillable = [
        'nama_tempat',
        'alamat',
        'deskripsi',
        'status',
        'foto'
    ];

    /**
     * Get all of the comments for the Wisata
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hitung(): HasMany
    {
        return $this->hasMany(PerhitunganWisata::class, 'wisata_id', 'id');
    }
    
}
