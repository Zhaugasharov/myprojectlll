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
        if(!Schema::hasTable('roles')){

            Schema::create('roles', function (Blueprint $table) {
                $table->increments('id');
                $table->string('role');
            });

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

                $table->foreign('role_id')->references('id')->on('roles');
            });

            Schema::create('user_phones', function (Blueprint $table) {
                $table->increments('id');
                $table->string('phone');
                $table->integer('user_id')->nullable()->unsigned();
                $table->foreign('user_id')->references('id')->on('users');
            });

        }
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
