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
        Schema::create('man_power_service_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("man_power_service_id");
            $table->string('locale')->index();
            $table->string('title');
            $table->text('content')->nullable();

            $table->index(['man_power_service_id', 'locale'],'manpower_id_locale_unique');

            $table->foreign('man_power_service_id')->references('id')->on('man_power_services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('man_power_service_translations');
    }
};