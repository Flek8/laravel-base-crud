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
        Schema::create('comics', function (Blueprint $comic) {
            $comic->id();

            $comic->string('title', 60);
            $comic->string('url', 255);
            $comic->decimal('price', 4, 2);
            $comic->string('series', 50);
            $comic->text('description');
            $comic->string('type', 50);

            $comic->timestamps();
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
