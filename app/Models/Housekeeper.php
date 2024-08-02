<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Housekeeper extends Model
{
    use HasFactory;
    protected $data = [
        'name',
        'phone_number',
        'email',
        'address',
    ];
    public function housekeepingTasks()
    {
        return $this->hasMany(HousekeepingTask::class);
    }
}
