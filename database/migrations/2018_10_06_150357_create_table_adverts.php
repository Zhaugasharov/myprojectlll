<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAdverts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country')->nullable();
        });

        Schema::create('states', function (Blueprint $table) {
            $table->increments('id');
            $table->string('state')->nullable();
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries');
        });

        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('city')->nullable();
            $table->integer('state_id')->nullable()->unsigned();
            $table->integer('country_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('country_id')->references('id')->on('countries');
        });

        Schema::create('advert_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type')->nullable();
        });

        Schema::create('search_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type')->nullable();
        });

        Schema::create('car_brands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brand');
        });

        Schema::create('car_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('model');
            $table->integer('brand_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('car_brands');
        });

        Schema::create('animal_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
        });

        Schema::create('thing_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
        });

        Schema::create('payment_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
        });

        Schema::create('advert_statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status');
        });

        Schema::create('adverts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status_id')->unsigned(); //Найденно или ищут
            $table->string('title')->nullable();
            $table->text('description');
            $table->double('price')->nullable();
            $table->integer('payment_type_id')->unsigned(); //Найденно или ищут
            $table->integer('advert_type_id')->unsigned(); //Найденно или ищут
            $table->integer('search_type_id')->unsigned(); //Человек машина и тд
            $table->integer('city_id')->unsigned(); //Человек машина и тд

            $table->string('fullname')->nullable();
            //people
            $table->tinyInteger('gender')->nullable();
            $table->integer('age')->nullable();
            //cars
            $table->integer('brand_id')->unsigned()->nullable();
            $table->integer('model_id')->unsigned()->nullable();
            $table->year('year')->nullable();
            //animal
            $table->integer('animal_id')->unsigned()->nullable();
            //things
            $table->integer('thing_id')->unsigned()->nullable();
            $table->text('keywords'); //Ключевые слова
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('advert_type_id')->references('id')->on('advert_types');
            $table->foreign('search_type_id')->references('id')->on('search_types');
            $table->foreign('status_id')->references('id')->on('advert_statuses');
            $table->foreign('brand_id')->references('id')->on('car_brands');
            $table->foreign('model_id')->references('id')->on('car_models');
            $table->foreign('animal_id')->references('id')->on('animal_types');
            $table->foreign('thing_id')->references('id')->on('thing_types');
        });

        Schema::create('advert_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('photo');
            $table->integer('advert_id')->unsigned();
            $table->foreign('advert_id')->references('id')->on('adverts');
        });

        Schema::create('advert_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('comment');
            $table->integer('comment_answer_id')->nullable()->unsigned();
            $table->integer('advert_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('advert_id')->references('id')->on('adverts');
            $table->foreign('comment_answer_id')->references('id')->on('advert_comments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
