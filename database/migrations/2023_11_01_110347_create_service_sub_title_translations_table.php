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
        if(!Schema::hasTable('service_subtitle_translations')){
        Schema::create('service_subtitle_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("service_subtitle_id");
            $table->string('locale')->index();
            $table->string('sub_title');
            $table->text('content');

            $table->unique(['service_subtitle_id', 'locale']);
            $table->foreign('service_subtitle_id')->references('id')->on('service_subtitles')->onDelete('cascade');
        });

    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_sub_title_translations');
    }
};