<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $fillable = 'user_types';
    protected $table = [
        'id',
        'type_name	',
        'is_registarable',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
    ];
}
