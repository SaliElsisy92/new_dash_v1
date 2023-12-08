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
        if(!Schema::hasTable('seo_translations')){
        Schema::create('seo_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('seo_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name');
            $table->text('desc');
            $table->string('keys');
            $table->unique(['seo_id', 'locale']);
            $table->foreign('seo_id')->references('id')->on('seos')->onDelete('cascade');
        });
    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seo_translations');
    }
};
