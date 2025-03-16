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
        Schema::table('spot_availability', function (Blueprint $table) {
            $table->dropColumn('day');
            $table->dropColumn('start_day_id');
            $table->dropColumn('end_day_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('spot_availability', function (Blueprint $table) {
            //
        });
    }
};
