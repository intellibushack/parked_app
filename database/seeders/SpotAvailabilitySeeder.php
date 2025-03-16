<?php

namespace Database\Seeders;

use App\Models\SpotAvailability;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpotAvailabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SpotAvailability::insert([
            [
                'start_time' => '20:00:00',
                'end_time' => '23:59:00',
                'occurrence' => 'once',
                'spot_id' => 2,
                'start_date' => '2025-03-20',
                'end_date' => '2025-03-21'
            ],
            [
                'start_time' => '12:00:00',
                'end_time' => '16:00:00',
                'occurrence' => 'once',
                'spot_id' => 3,
                'start_date' => '2025-03-09',
                'end_date' => '2025-03-10'
            ],
            [
                'start_time' => '11:00:00',
                'end_time' => '23:00:00',
                'occurrence' => 'weekly',
                'spot_id' => 1,
                'start_date' => '2025-03-15',
                'end_date' => '2025-03-16'
            ]
        ]);
    }
}
