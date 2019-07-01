<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $fillable = 'payment_methods';
    protected $table = [
        'id',
        'name',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
    ];
}
