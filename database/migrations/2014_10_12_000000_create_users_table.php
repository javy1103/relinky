<?php

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
            $table->string('username')->unique();
            $table->string('password');
            $table->morphs('profile');
            $table->index('email');
            $table->boolean('isActive')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });

        DB::statement('ALTER TABLE users ADD searchable tsvector NULL');
        DB::statement('CREATE INDEX users_searchable_index ON users USING GIN (searchable)');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
