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
        if(!Schema::hasTable('management_translations')){
        Schema::create('management_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("management_id");
            $table->string('locale')->index();
            $table->string('title');
            $table->text('content')->nullable();

            $table->unique(['management_id', 'locale']);
            $table->foreign('management_id')->references('id')->on('management')->onDelete('cascade');
        });
    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('management_translations');
    }
};