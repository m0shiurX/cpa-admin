<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Conversion extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'smartlink_id',
        'payout_amount',
        'conversion_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
