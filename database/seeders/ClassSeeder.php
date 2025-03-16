<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classes')->where('id', 1)->update(['hourly_price' => 1000]);
        DB::table('classes')->where('id', 2)->update(['hourly_price' => 2500]);
        DB::table('classes')->where('id', 3)->update(['hourly_price' => 3700]);
    }
}
