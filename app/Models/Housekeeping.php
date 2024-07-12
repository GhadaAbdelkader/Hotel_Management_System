<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Housekeeping extends Model
{
    use HasFactory;
    protected $data = [
        'room_id', 'date', 'status', 'notes'
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
