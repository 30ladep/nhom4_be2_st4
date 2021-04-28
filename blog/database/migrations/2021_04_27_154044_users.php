<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
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
            $table->string('user_name');
            $table->string('password');
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->datetime('create_date');
            $table->string('login_cart');
            $table->string('token_cart');
            $table->integer('type_user_id');
            $table->foreign('type_user_id')->references('id')->on('type_user');
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
