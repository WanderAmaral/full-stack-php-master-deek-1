<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('top_homes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->string('text_btn');
            $table->string('link_btn');
            $table->string('title_topics_one');
            $table->string('description_topics_one');

            $table->string('title_topics_two');
            $table->string('description_topics_two');

            $table->string('title_topics_three');
            $table->string('description_topics_three');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('top_homes');
    }
};
