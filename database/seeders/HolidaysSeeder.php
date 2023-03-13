<?php

namespace Database\Seeders;

use App\Models\Holiday;
use DateTime;
use DateTimeImmutable;
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
            ['name' => 'Allerheiligen', 'date' => date_create('2023-11-01')],
            ['name' => 'Weihnachten', 'date' => date_create('2023-12-25')],
            ['name' => 'Heilige Drei Könige', 'date' => date_create('2023-01-06')]
        ];
        Holiday::insert($holidays);
    }
}
