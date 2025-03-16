<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpotAvailability extends Model
{
    protected $table = 'spot_availability';

    protected $fillable = [
        'id',
        'start_time',
        'end_time',
        'occurrence',
        'created_at',
        'updated_at',
        'deleted_at',
        'spot_id',
        'start_date',
        'end_date'
    ];

    public $timestamps = true;
}
