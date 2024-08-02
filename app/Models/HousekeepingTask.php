<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HousekeepingTasks extends Model
{
    use HasFactory;
    protected $data = [
        'room_id',
        'housekeeper_id',
        'date',
        'task_details',
        'status',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }


}
