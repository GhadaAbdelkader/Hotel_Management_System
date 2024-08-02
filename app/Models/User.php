<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $data = [
        'name', 'email', 'password', 'role', 'guest_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function reservations()
    {
        return $this->hasManyThrough(Reservation::class, Guest::class, 'user_id', 'guest_id', 'id', 'id');
    }

    public function guest()
    {
        return $this->hasOne(Guest::class);
    }}
