<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            //campi
            $table->string('title', 100);
            $table->text('description');
            $table->string('thumb', 255);
            $table->float('price', 4, 2); //99,99
            $table->string('series', 100);
            $table->string('sale_date', 10);
            $table->string('type', 50);
            //campi
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
        Schema::dropIfExists('comics');
    }
}
