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
        if(!Schema::hasTable('aboutsubtitle_translations')){
        Schema::create('aboutsubtitle_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("aboutsubtitle_id");
            $table->string('locale')->index();
            $table->string('sub_title');
            $table->text('content');

            $table->index(['aboutsubtitle_id', 'locale'],'aboutsubtitle_id_local_unique');
            $table->foreign('aboutsubtitle_id')->references('id')->on('aboutsubtitles')->onDelete('cascade');
        });
    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aboutsubtitle_translations');
    }
};