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
            $table->String('name');
            $table->String('slug');
            $table->date('released')->nullable();
            $table->String('background_image');
            $table->float('rating');
            $table->json('parent_platforms');
            $table->json('ratings');
            $table->json('platforms');
            $table->json('genres');
            $table->json('stores');
            $table->json('tags');
            $table->json('esrb_rating');
            $table->json('short_screenshots');
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
