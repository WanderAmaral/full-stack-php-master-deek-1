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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();

            $table->string('title_topics');
            $table->string('subtitle_topics');

            $table->string('title_topic_one');
            $table->string('description_topic_one');

            $table->string('title_topic_two');
            $table->string('description_topic_two');

            $table->string('title_topic_three');
            $table->string('description_topic_three');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
