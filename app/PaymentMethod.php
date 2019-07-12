<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $table = 'payment_methods';
    protected $fillable = [
        'id',
        'name',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
    ];
}
