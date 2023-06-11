<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailKriteriaFasilitas extends Model
{
    use HasFactory;
    public $table = 'detail_kriteria_fasilitas';

    protected $fillable = [
        'jawaban_a',
        'jawaban_b',
        'jawaban_c',
        'jawaban_d',
        'jawaban_e',
        'kriteria_fasilitas_id'
    ];

    /**
     * Get all of the comments for the DetailKriteriaFasilitas
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    /**
     * Get the user that owns the DetailKriteriaFasilitas
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(KriteriaFasilitas::class, 'kriteria_fasilitas_id');
    }
}
