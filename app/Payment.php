<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = 'payments';
    protected $table = [
        'id',
        'order_id',
        'payment_method_id',
        'transaction_id',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
    ];
}
