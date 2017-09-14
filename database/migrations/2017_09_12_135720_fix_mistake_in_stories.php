<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixMistakeInStories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('year');
            $table->string('title_ru');
            $table->string('title_en');
            $table->string('position_ru');
            $table->string('position_en');
            $table->text('text_ru');
            $table->text('text_en');
            $table->timestamps();
        });
        Schema::dropIfExists('storys');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('storys', function (Blueprint $table) {
            //
        });
        Schema::dropIfExists('stories');
    }
}
