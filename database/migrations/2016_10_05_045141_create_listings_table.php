<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Address');
            $table->string('Address 2');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->integer('zipcode');
            $table->char('State', 2);
            $table->smallInteger('year_built');
            $table->smallInteger('sqft');
            $table->tinyInteger('beds');
            $table->tinyInteger('baths');
            $table->integer('price');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });

        DB::statement('ALTER TABLE listings ADD searchable tsvector NULL');
        DB::statement('CREATE INDEX listings_searchable_index ON listings USING GIN (searchable)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('listings');
    }
}
