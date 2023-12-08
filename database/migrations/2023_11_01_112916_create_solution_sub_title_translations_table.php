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
        if(!Schema::hasTable('solution_sub_title_translations')){
        Schema::create('solution_sub_title_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("solution_sub_title_id");
            $table->string('locale')->index();
            $table->string('sub_title');
            $table->text('content');

            $table->index(['solution_sub_title_id', 'locale'],'solutionsubtitle_id_local_unique');
            $table->foreign('solution_sub_title_id')->references('id')->on('solution_sub_titles')->onDelete('cascade');
        });
    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solution_sub_title_translations');
    }
};