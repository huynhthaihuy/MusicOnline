<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSingerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('singer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('birthday');
            $table->string('height');
            $table->string('weight');
            $table->string('type');
            $table->string('country');
            $table->string('hoppy');
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
        Schema::dropIfExists('singer');
    }
}
