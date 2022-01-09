<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id')->users();
            $table->string('question_id')->question();
            $table->timestamps();
        });
    }
    
    public function users()
            {
                return $this->hasOne('App\users');
            }

public function question()
            {
                return $this->hasOne('App\question');
            }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('like');
    }
}
