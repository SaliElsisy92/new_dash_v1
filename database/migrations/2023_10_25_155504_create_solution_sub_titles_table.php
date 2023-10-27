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
        Schema::create('solution_sub_titles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("parent_id");
            $table->string('image');
            $table->foreign('parent_id')->references('id')->on('solutions')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('solution_sub_title_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("sub_title_id");
            $table->string('locale')->index();
            $table->string('title');
            $table->text('content');

            $table->unique(['sub_title_id', 'locale']);
            $table->foreign('sub_title_id')->references('id')->on('solution_sub_titles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solution_sub_titles');
    }
};