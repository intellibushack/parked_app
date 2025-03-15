<?php

namespace Database\Seeders;

use App\Models\Parishes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParishesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Parishes::insert([
            ["parish_name" => "Clarendon"],
            ["parish_name" => "Hanover"],
            ["parish_name" => "Kingston"],
            ["parish_name" => "Manchester"],
            ["parish_name" => "Portland"],
            ["parish_name" => "Saint Andrew"],
            ["parish_name" => "Saint Ann"],
            ["parish_name" => "Saint Catherine"],
            ["parish_name" => "Saint Elizabeth"],
            ["parish_name" => "Saint James"],
            ["parish_name" => "Saint Mary"],
            ["parish_name" => "Saint Thomas"],
            ["parish_name" => "Trelawny"],
            ["parish_name" => "Westmoreland"],
        ]);
    }
}
