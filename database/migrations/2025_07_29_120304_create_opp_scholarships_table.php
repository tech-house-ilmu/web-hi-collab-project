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
        Schema::create('opp_scholarships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hi_opportunity_id')->constrained()->onDelete('cascade');
            $table->string('img_logo')->nullable();
            $table->string('img_poster')->nullable();
            $table->string('category')->nullable();
            $table->string('type')->nullable();
            $table->date('deadline')->nullable();
            $table->string('link_apply')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opp_scholarships');
    }
};
