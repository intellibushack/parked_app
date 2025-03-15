<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupportingDocuments extends Model
{
    protected $table = 'supporting_documents';

    protected $fillable = [
        'id',
        'user_id',
        'link',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public $timestamps = true;
}
