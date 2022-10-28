<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->String('name')->nullable();
            $table->String('slug');
            $table->date('released')->nullable();
            $table->String('background_image')->nullable();
            $table->float('rating');
            $table->integer('added');
            $table->integer('playtime')->nullable();
            $table->json('parent_platforms');
            $table->json('ratings');
            $table->json('platforms');
            $table->json('genres');
            $table->json('stores')->nullable();
            $table->json('tags');
            $table->json('esrb_rating')->nullable();
            $table->json('short_screenshots')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
};
