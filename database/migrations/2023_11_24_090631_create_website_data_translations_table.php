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
        if(!Schema::hasTable('website_data_translations')){
        Schema::create('website_data_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('website_data_id');
            $table->string('locale')->index();
            $table->string('site_name');
            $table->string('address');

            $table->index(['website_data_id', 'locale'],'website_data_id_local_unique');
            $table->foreign('website_data_id')->references('id')->on('website_datas')->onDelete('cascade');
        });
    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_data_translations');
    }
};
