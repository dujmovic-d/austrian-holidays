<?php

namespace Database\Seeders;

use App\Models\Holiday;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HolidaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $holidays = [
            ['name' => 'Allerheiligen', 'date' => json_encode(['d' => 1, 'm' => 11,'y'=>2023])],
            ['name' => 'Weihnachten', 'date' => json_encode(['d' => 25, 'm' => 12,'y'=>2023])],
            ['name' => 'Heilige Drei Könige', 'date' => json_encode(['d' => 6, 'm' => 1,'y'=>2023])]
        ];
        Holiday::insert($holidays);
    }
}
