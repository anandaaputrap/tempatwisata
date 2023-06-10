<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otp extends Model
{
    use HasFactory;

    public $table = 'kritik_saran';

    protected $fillable = [
        'user_id',
        'otp',
        'expire_at'
    ];
}
