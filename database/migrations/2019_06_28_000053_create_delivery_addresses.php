<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveryAddresses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('forename');
            $table->string('surname');
            $table->string('add1');
            $table->string('add2');
            $table->string('add3');
            $table->integer('postcode');
            $table->string('phone');
            $table->string('email')->unique();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('delivery_addresses');
    }
}
