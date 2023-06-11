<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otp extends Model
{
    use HasFactory;

    public $table = 'otp';

    protected $fillable = [
        'user_id',
        'otp',
        'expire_at',
        'status'
    ];

    /**
     * Get the user associated with the Otp
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }
}
