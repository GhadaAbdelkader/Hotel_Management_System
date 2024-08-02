<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Room
 *
 * @property string $number
 * @property string $type
 * @property string $size
 * @property array $amenities
 * @property array $capacity
 * @property array $status
 * @property string $main_picture
 * @property array $pictures
 * @property float $price
 */
class Room extends Model
{
    use HasFactory;


    protected $fillable  = [
        'number',
        'type',
        'size',
        'amenities',
        'capacity',
        'status',
        'main_picture',
        'pictures',
        'price',
        'hotel_name',
        'room_description',
        'short_description',
        'amenity_icon',
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
        return $this->hasMany(HousekeepingTask::class);
    }

    public function maintenance()
    {
        return $this->hasMany(Maintenance::class);
    }
}
