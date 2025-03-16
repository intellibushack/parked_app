<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = "classes";

    protected $fillable = [
        'id',
        'min_height',
        'max_height',
        'min_length',
        'max_length',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public $timestamps = true;
}
