<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;
    protected $table = 'maintenance';
    protected $data = [
        'room_id', 'date', 'issue', 'notes'
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
