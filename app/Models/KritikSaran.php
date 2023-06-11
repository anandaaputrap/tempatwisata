<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KritikSaran extends Model
{
    use HasFactory;

    public $table = 'kritik_saran';

    protected $fillable = [
        'kritik',
        'saran',
        'wisata_id',
        'user_id'
    ];
}
