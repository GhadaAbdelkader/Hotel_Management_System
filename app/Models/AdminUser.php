<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminUser extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'admins';
    protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
    ];
public function setPasswordAttribute($password)
{
    $this->attributes['password'] = bcrypt($password);
}
    public function setConfirmPasswordAttribute($confirmPassword)
    {
        $this->attributes['confirmPassword'] = bcrypt($confirmPassword);
    }
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
