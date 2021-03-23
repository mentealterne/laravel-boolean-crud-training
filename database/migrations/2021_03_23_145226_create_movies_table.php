<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title',255);
            $table->string('genre',255);
            $table->string('director', 255);
            $table->string('abstract',255);
            $table->string('production', 255);
            $table->string('language', 255);
            $table->string('cover',2048);
            $table->float('ratings',3,1)->default(5);
            $table->smallInteger('year');
            $table->date('expireDate')->nullable();
            $table->boolean('visible')->default(false);


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
        Schema::dropIfExists('movies');
    }
}
