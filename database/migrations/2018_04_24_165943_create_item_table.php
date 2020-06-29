<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('imagePath')->nullable();
            $table->string('videoPath')->nullable();
            $table->string('title')->nullable();
            $table->mediumText('description')->nullable();
            $table->mediumText('synopsis')->nullable();
            $table->mediumText('director')->nullable();
            $table->mediumText('writers')->nullable();
            $table->mediumText('stars')->nullable();
            $table->mediumText('year')->nullable();
            $table->float('price')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('items');
    }
}
