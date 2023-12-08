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
        if(!Schema::hasTable('slider_translations')){
        Schema::create('slider_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('slider_id');
            $table->string('locale')->index();
            $table->string('title');
            $table->string('desc');
            $table->index(['slider_id', 'locale'],'slider_id_local_unique');
            $table->foreign('slider_id')->references('id')->on('sliders')->onDelete('cascade');
        });
    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slider_translations');
    }
};