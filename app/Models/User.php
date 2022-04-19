<?php

namespace App\Models;

use App\Models\Conversion;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes, HasRoles;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'n_id_no',
        'n_id_back_path',
        'n_id_front_path',
        'is_n_id_verified',
        'password',
        'network_id',
        'video_path',
        'photo_path',
        'is_approved',
        'smartlink_code'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function conversions()
    {
        return $this->hasMany(Conversion::class);
    }
}
