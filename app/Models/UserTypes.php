<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserTypes extends Model
{
    protected $table = 'user_types';

    protected $fillable = [
        'id',
        'name',
        'created_at',
        'updated_at',
        'deleted_at'

    ];

    public $timestamps = true;
}
