<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeCarouselItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_carousel_items', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('');
            $table->string('background')->default('');
            $table->string('logo')->default('');
            $table->string('thumbnail')->default('');
            $table->string('url')->default('');
            $table->text('description')->nullable();
            $table->integer('position');
            $table->boolean('active')->default(true);
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
        Schema::dropIfExists('home_carousel_items');
    }
}
