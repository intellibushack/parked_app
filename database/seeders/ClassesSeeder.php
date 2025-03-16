<?php

namespace Database\Seeders;

use App\Models\Classes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classes::insert([
            [
                'min_height' => NULL,
                'max_height' => 1.7,
                'min_length' => NULL,
                'max_length' => NULL,
            ],
            [
                'min_height' => 1.7,
                'max_height' => NULL,
                'min_length' => NULL,
                'max_length' => 5.5,
            ],
            [
                'min_height' => 1.7,
                'max_height' => NULL,
                'min_length' => 5.5,
                'max_length' => NULL,
            ],
        ]);
    }
}
