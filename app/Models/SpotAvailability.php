<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpotAvailability extends Model
{
    protected $table = 'spot_availability';

    protected $fillable = [
        'id',
        'day',
        'start_time',
        'end_time',
        'date',
        'occurrence',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public $timestamps = true;
}
