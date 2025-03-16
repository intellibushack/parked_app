<?php

namespace Database\Seeders;

use App\Models\UserTypes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use UserType;

class UserTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserTypes::insert([
            [
                'name' => 'Tenant',
            ],
            [
                'name' => 'Renter',
            ]

            ]);
    }
}
