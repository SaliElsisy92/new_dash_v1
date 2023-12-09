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
        if(!Schema::hasTable('solution_sub_titles')){
        Schema::create('solution_sub_titles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("parent_id");
            $table->string('image')->nullable();
            $table->foreign('parent_id')->references('id')->on('solutions')->onDelete('cascade');
            $table->timestamps();
        });
    }


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solution_sub_titles');
    }
};