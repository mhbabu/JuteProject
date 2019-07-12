<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveryAddressesTable extends Migration
{
    public function up()
    {
        Schema::create('delivery_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('forename')->nullable();
            $table->string('surname')->nullable();
            $table->string('add1')->nullable();
            $table->string('add2')->nullable();
            $table->string('add3')->nullable();
            $table->integer('postcode')->default(0);
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->integer('is_archive')->default(0);
            $table->integer('created_by')->default(0);
            $table->integer('updated_by')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('delivery_addresses');
    }
}
