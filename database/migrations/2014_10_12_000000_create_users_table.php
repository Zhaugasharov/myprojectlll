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
            $table->string('sname')->nullable();
            $table->string('fname');
            $table->string('pname')->nullable();
            $table->string('email')->unique();
            $table->string('google_key')->nullable();
            $table->string('facebook_key')->nullable();
            $table->string('instagram_key')->nullable();
            $table->integer('role_id')->nullable()->unsigned()->foreign();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('role', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role');
            $table->foreign('id')->references('role_id')->on('users');
        });

        Schema::create('phones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone');
            $table->integer('user_id')->nullable()->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
