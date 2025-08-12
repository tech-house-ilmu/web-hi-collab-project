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
        Schema::create('hi_opportunity_subfields', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hi_opportunity_section_id')->constrained()->onDelete('cascade');
            $table->string('label');
            $table->text('value')->nullable();
            $table->integer('order')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hi_opportunity_subfields');
    }
};
