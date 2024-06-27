<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Room;

class Amenities extends Model
{
    use HasFactory;

    protected $table = 'amenities';
    protected $primaryKey = 'id';
}
