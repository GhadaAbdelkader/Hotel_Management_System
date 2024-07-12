<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $data = [
         'room_number', 'room_type', 'room_size', 'amenities', 'pictures', 'capacity', 'status'
    ];

    public function roomRates()
    {
        return $this->hasMany(RoomRate::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function housekeeping()
    {
        return $this->hasMany(Housekeeping::class);
    }

    public function maintenance()
    {
        return $this->hasMany(Maintenance::class);
    }
}
