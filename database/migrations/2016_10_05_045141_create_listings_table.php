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
            $table->string('address');
            $table->string('address_2');
            $table->integer('city_id')->unsigned();
            $table->integer('zipcode')->unsigned();
            $table->char('state', 2);
            $table->text('description');
            $table->date('available_date')->nullable();
            $table->tinyInteger('listing_type_id');
            $table->string('contract_type');
            $table->smallInteger('year_built')->unsigned();
            $table->smallInteger('sqft')->unsigned();
            $table->tinyInteger('beds')->unsigned();
            $table->tinyInteger('baths')->unsigned();
            $table->integer('price')->unsigned();
            $table->string('price_suffix')->nullable();
            $table->integer('user_id');
            $table->timestamps();
        });

        Schema::table('listings', function($table) {
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('listing_type_id')->references('id')->on('property_types');
            $table->foreign('user_id')->references('id')->on('users');
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
