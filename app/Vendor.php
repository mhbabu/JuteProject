<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = 'vendors';
    protected $fillable = [
        'id',
        'name',
        'address',
        'email',
        'phone',
        'website',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
    ];
}
