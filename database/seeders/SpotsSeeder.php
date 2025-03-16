<?php

namespace Database\Seeders;

use App\Models\Spots;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpotsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Spots::insert([
            [
                "user_id" => 1,
                "lot_number" => 28,
                "street_number" => 25,
                "street_name" => "Sirgany",
                "parish_id" => 1,
                "class_id" => 2
            ],
            [
                "user_id" => 2,
                "lot_number" => 100,
                "street_number" => 25,
                "street_name" => "Wakefield",
                "parish_id" => 2,
                "class_id" => 3
            ],
            [
                "user_id" => 1,
                "lot_number" => 50,
                "street_number" => 23,
                "street_name" => "Knutsford",
                "parish_id" => 1,
                "class_id" => 2
            ],
            [
                "user_id" => 1,
                "lot_number" => 28,
                "street_number" => 90,
                "street_name" => "Grenada",
                "parish_id" => 9,
                "class_id" => 3
            ]
        ]);
    }
}
