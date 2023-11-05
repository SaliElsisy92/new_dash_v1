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
        Schema::create('managementsubtitle_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("managementsubtitle_id");
            $table->string('locale')->index();
            $table->string('sub_title');
            $table->text('content');

            $table->unique(['managementsubtitle_id', 'locale']);
            $table->foreign('managementsubtitle_id')->references('id')->on('managementsubtitles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('managementsubtitle_translations');
    }
};