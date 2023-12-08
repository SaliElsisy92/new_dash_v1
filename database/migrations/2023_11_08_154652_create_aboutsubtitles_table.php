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
    {       if(!Schema::hasTable('aboutsubtitles')){
        Schema::create('aboutsubtitles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("parent_id");
            $table->string('image');
            $table->foreign('parent_id')->references('id')->on('abouts')->onDelete('cascade');
            $table->timestamps();
        });
    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aboutsubtitles');
    }
};