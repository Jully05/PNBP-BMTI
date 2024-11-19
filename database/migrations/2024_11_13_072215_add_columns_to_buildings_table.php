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
        Schema::table('buildings', function (Blueprint $table) {
            $table->integer('kapasitas')->nullable();
            $table->string('ruang')->nullable();
            $table->boolean('AC')->default(false);
            $table->boolean('wifi')->default(false);
            $table->boolean('parkir')->default(false);
            $table->boolean('toilet')->default(false);
            $table->boolean('viproom')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('buildings', function (Blueprint $table) {
            $table->dropColumn(['kapasitas', 'ruang', 'AC', 'wifi', 'parkir', 'toilet', 'viproom']);
        });
    }
};
