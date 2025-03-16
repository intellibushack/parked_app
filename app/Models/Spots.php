<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Spots extends Model
{
    protected $table = 'spots';

    protected $fillable = [

        'id',
        'user_id',
        'lot_number',
        'created_at',
        'updated_at',
        'deleted_at',
        'street_number',
        'parish_id',
        'class_id',
        'street_name'
    ];

    public $timestamps = true;

    public function spotAvailability(): HasOne
    {
        return $this->hasOne(SpotAvailability::class, 'spot_id', 'id');
    }

    public function parish(): HasOne
    {
        return $this->hasOne(Parishes::class, 'id', 'parish_id');
    }

    public function class(): HasOne
    {
        return $this->hasOne(Classes::class, 'id', 'class_id');
    }

    public function spotAvailabilities(): HasMany
    {
        return $this->hasMany(SpotAvailability::class, 'spot_id', 'id');
    }
}
