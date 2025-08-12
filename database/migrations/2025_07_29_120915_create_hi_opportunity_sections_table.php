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
        Schema::create('hi_opportunity_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hi_opportunity_id')->constrained()->onDelete('cascade');
            $table->string('section_title');
            $table->integer('order')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hi_opportunity_sections');
    }
};
