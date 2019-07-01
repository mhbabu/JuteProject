<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = 'products';
    protected $table = [
        'id',
        'category_id',
        'sub_category_id',
        'vendor_id',
        'name',
        'price',
        'code',
        'description',
        'origin',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
    ];
}
