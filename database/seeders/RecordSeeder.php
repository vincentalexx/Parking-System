<?php

namespace Database\Seeders;

use App\Models\Record;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = [
            [
                'user_id' => '2',
                'nopol' => 'D 1234 EF',
                'start_time' => '2021-10-26 20:00:00',
                'end_time' => '2021-10-26 22:00:00',
                'price' => '6000',
            ],
            [
                'user_id' => '3',
                'nopol' => 'D 2345 FG',
                'start_time' => '2021-10-26 21:00:00',
                'end_time' => '2021-10-26 22:00:00',
                'price' => '3000',
            ],
            [
                'user_id' => '4',
                'nopol' => 'D 3456 GH',
                'start_time' => '2021-10-26 21:00:00',
                'end_time' => '2021-10-26 23:00:00',
                'price' => '6000',
            ],
            [
                'user_id' => '3',
                'nopol' => 'D 4567 HI',
                'start_time' => '2021-10-26 21:00:00',
            ],
        ];
        foreach($orders as $order){
            Record::create($order);
        }
    }
}
