<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
              $table->BigIncrements('id');
            $table->text('questionText');
            $table->text('answer');
            $table->text('feedback')->nullable();
            $table->timestamps();
            #外部キーの設定(user_id)
           $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            #company_id
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
