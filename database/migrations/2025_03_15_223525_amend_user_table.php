<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Remove the 'name' column
            $table->dropColumn('name');

            // Add 'first_name' and 'last_name' columns
            $table->string('firstname')->after('id');
            $table->string('lastname')->after('firstname');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Add the 'name' column back
            $table->string('name')->after('id');

            // Remove 'first_name' and 'last_name' columns
            $table->dropColumn(['firstname', 'lastname']);
        });
    }
};
