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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->longText('about_ar');
            $table->longText('about_en');
            $table->longText('vision_ar');
            $table->longText('vision_en');
            $table->longText('mission_ar');
            $table->longText('mission_en');
            $table->longText('last_updates_ar');
            $table->longText('last_updates_en');
            $table->longText('awards_ar');
            $table->longText('awards_en');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
