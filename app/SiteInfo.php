<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteInfo extends Model
{
    protected $fillable = 'site_info';
    protected $table = [
        'id',
        'site_name',
        'logo',
        'address',
        'website',
        'phone',
        'code',
        'email',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
    ];
}
