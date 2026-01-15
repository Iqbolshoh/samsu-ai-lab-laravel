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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();

            // Titles
            $table->string('title_uz');
            $table->string('title_en');

            // Subtitles
            $table->string('subtitle_uz')->nullable();
            $table->string('subtitle_en')->nullable();

            // Buttons
            $table->string('btn1_text_uz')->nullable();
            $table->string('btn1_text_en')->nullable();
            $table->string('btn1_url')->nullable();

            $table->string('btn2_text_uz')->nullable();
            $table->string('btn2_text_en')->nullable();
            $table->string('btn2_url')->nullable();

            // Image
            $table->string('image')->nullable();

            // Order in slider
            $table->integer('position')->default(0);

            // Active / inactive
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
