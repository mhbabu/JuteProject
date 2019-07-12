<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('user_hash')->nullable();
            $table->integer('user_verification')->default(0);
            $table->string('nid')->nullable();
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('phone')->nullable();
            $table->string('photo')->nullable();
            $table->string('signature')->nullable();
            $table->string('nationality')->nullable();
            $table->string('country')->nullable();
            $table->integer('district_id')->default(0);
            $table->integer('thana_id')->default(0);
            $table->string('post_code')->nullable();
            $table->string('state')->nullable();
            $table->string('province')->nullable();
            $table->string('company_name')->nullable();
            $table->string('designation')->nullable();
            $table->integer('is_approved')->default(0);
            $table->integer('status')->default();
            $table->integer('is_archive')->default(0);
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
