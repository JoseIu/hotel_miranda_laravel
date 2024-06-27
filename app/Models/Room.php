<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Amenities;


class Room extends Model
{
    use HasFactory;

    protected $table = 'room';
    protected $primaryKey = '_id';

    public function amenities()
    {
        return $this->belongsToMany(Amenities::class, 'room_amenities', 'room_id', 'amenity_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'room_id');
    }

    public function images()
    {
        return $this->hasMany(RoomImage::class, 'room_id');
    }

}
