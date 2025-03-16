<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Bookings extends Model
{
    protected $table = 'bookings';

    protected $fillable = [
        'id',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'created_at',
        'updated_at',
        'deleted_at',
        'spots_availability_id',
        'customer_id',
        'payment_id'
    ];

    public $timestamps = true;

    public function customer(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'customer_id');
    }

    public function payment(): HasOne
    {
        return $this->hasOne(Payments::class, 'id', 'payment_id');
    }

    public function spotAvailability(): HasOne
    {
        return $this->hasOne(SpotAvailability::class, 'id', 'spots_availability_id');
    }
}
