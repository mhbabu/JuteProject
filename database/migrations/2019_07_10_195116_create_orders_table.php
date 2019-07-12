<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->default(0);
            $table->string('registered')->nullable();
            $table->integer('delivery_add_id')->default(0);
            $table->string('payment_type')->nullable();
            $table->integer('date')->nullable();
            $table->string('session')->nullable();
            $table->integer('total')->default(0);
            $table->integer('status')->default(0);
            $table->integer('is_archive')->default(0);
            $table->integer('created_by')->default(0);
            $table->integer('updated_by')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
