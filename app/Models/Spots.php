<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spots extends Model
{
    protected $table = 'spots';

    protected $fillable = [
        'id',
        'user_id',
        'address',
        'lot_number',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public $timestamps = true;
}
