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
        Schema::table('classes', function (Blueprint $table) {
            $table->dropColumn('min-height');
            $table->dropColumn('max-height');
            $table->dropColumn('min-length');
            $table->dropColumn('max-length');

            $table->integer('min_height')->nullable();
            $table->integer('max_height')->nullable();
            $table->integer('min_length')->nullable();
            $table->integer('max_length')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('classes', function (Blueprint $table) {
            //
        });
    }
};
