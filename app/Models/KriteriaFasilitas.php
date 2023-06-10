<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KriteriaFasilitas extends Model
{
    use HasFactory;
    
    public $table = 'kriteria_fasilitas';

    protected $fillable = [
        'fasilitas',
        'status'
    ];

    /**
     * Get all of the comments for the DetailKriteriaFasilitas
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detail(): HasMany
    {
        return $this->hasMany(DetailKriteriaFasilitas::class, 'kriteria_fasilitas_id', 'id');
    }
}
