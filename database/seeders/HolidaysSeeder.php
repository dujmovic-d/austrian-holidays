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
            ['name' => 'Allerheiligen', 'date' => json_encode(['y'=>'2023', 'm' => '11','d' => '01'])],
            ['name' => 'Weihnachten', 'date' => json_encode(['y'=>'2023', 'm' => '12','d' => '25'])],
            ['name' => 'Heilige Drei Könige', 'date' => json_encode(['y'=>'2023', 'm' => '01','d' => '06'])]
        ];
        Holiday::insert($holidays);
    }
}
