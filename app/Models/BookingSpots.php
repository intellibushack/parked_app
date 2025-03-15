<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookingSpots extends Model
{
    protected $table = 'booking_spots';

    protected $fillable = [
        'id',
        'booking_id',
        'spot_id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public $timestamps = true;
}
