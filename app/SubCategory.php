<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = 'sub_categories';
    protected $table = [
        'id',
        'category_id	',
        'description',
        'name',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
    ];
}
