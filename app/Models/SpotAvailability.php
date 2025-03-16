<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function spot(): BelongsTo
    {
        return $this->belongsTo(Spots::class, 'spot_id', 'id');
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Bookings::class, 'spots_availability_id', 'id');
    }
}
