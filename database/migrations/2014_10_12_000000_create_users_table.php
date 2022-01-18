<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('belongs');
            $table->unsignedBigInteger('industry_id');
            $table->foreign('industry_id')->references('id')->on('industry');
            $table->unsignedBigInteger('occupation_id');
            $table->foreign('occupation_id')->references('id')->on('occupation');
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('company');
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
