<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = 'sliders';
    protected $table = [
        'id',
        'title',
        'description',
        'address',
        'image',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
    ];
}
