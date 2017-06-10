<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('result', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('subject');        
            $table->string('total_questoin');
            $table->string('correct_answer');
            $table->string('time_taken');
            $table->string('score');
            $table->rememberToken();
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
        //
    }
}
