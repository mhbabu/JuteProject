<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $fillable = 'advertisements';
    protected $table = [
        'id',
        'title',
        'description',
        'image',
        'link',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
    ];
}
