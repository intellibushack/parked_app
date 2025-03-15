<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    protected $table = 'bookings';

    protected $fillable = [
        'id',
        'date',
        'start_time',
        'end_time',
        'created_at',
        'updated_at',
        'deleted_at'

    ];

    public $timestamps = true;
}
