<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomRate extends Model
{
    use HasFactory;

    protected $data = [
        'room_id', 'rate', 'season', 'occupancy', 'promotion'
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
