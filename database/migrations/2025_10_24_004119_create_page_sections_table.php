<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('page_sections', function (Blueprint $table) {
            $table->id();
            $table->string('page');

            // Hero section
            $table->string('hero_title_uz')->nullable();
            $table->string('hero_title_en')->nullable();
            $table->text('hero_subtitle_uz')->nullable();
            $table->text('hero_subtitle_en')->nullable();

            // CTA section
            $table->string('cta_title_uz')->nullable();
            $table->string('cta_title_en')->nullable();
            $table->text('cta_subtitle_uz')->nullable();
            $table->text('cta_subtitle_en')->nullable();
            $table->string('cta_button_text_uz')->nullable();
            $table->string('cta_button_text_en')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_sections');
    }
};
