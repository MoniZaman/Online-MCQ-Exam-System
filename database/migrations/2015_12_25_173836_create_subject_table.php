<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('subject', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('subject');
            $table->string('category');
            $table->string('duration');
            $table->boolean('status')->default(1);
            $table->rememberToken();
            $table->timestamps();
        });
    }
// $table->foreign('category')->reference('category_name')->on('category_list')->onDelete('cascade');     
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
