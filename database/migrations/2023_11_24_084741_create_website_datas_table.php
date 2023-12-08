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
        if(!Schema::hasTable('website_datas')){
        Schema::create('website_datas', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->string('phone');
            $table->string('fax');
            $table->string('email1');
            $table->string('email2');
            $table->string('facebook');
            $table->string('linkedin');
            $table->string('instgram');
            $table->string('twitter');
            $table->string('whatsapp');
            $table->string('logo')->nullable();
            $table->timestamps();
        });
    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_datas');
    }
};
