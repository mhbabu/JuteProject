<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = 'categories';
    protected $table = [
        'id',
        'name',
        'description',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
    ];
}
