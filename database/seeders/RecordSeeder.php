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

        date_default_timezone_set('Asia/Jakarta');

        $orders = [
            [
                'user_id' => '2',
                'nopol' => 'D 1234 EF',
                'start_time' => '2023-10-26 20:00:00',
                'end_time' => '2023-10-26 22:00:00',
                'price' => '6000',
                'duration' => '2',
            ],
            [
                'user_id' => '3',
                'nopol' => 'D 2345 FG',
                'start_time' => '2023-10-26 21:00:00',
                'end_time' => '2023-10-26 22:00:00',
                'price' => '3000',
                'duration' => '1',
            ],
            [
                'user_id' => '4',
                'nopol' => 'D 3456 GH',
                'start_time' => '2023-10-26 21:00:00',
                'end_time' => '2023-10-26 23:00:00',
                'price' => '6000',
                'duration' => '2',
            ],
            [
                'user_id' => '3',
                'nopol' => 'D 4567 HI',
                'start_time' => '2023-10-26 21:00:00',
                'end_time' => '2023-10-26 23:45:00',
                'price' => '9000',
                'duration' => '3',
            ],
            [
                'user_id' => '3',
                'nopol' => 'D 1234 AB',
                'start_time' => '2023-10-28 08:00:00',
                'end_time' => '2023-10-28 10:00:00',
                'price' => '6000',
                'duration' => '2',
            ],
            [
                'user_id' => '1',
                'nopol' => 'D 4567 CD',
                'start_time' => '2023-10-29 15:00:00',
                'end_time' => '2023-10-29 16:00:00',
                'price' => '3000',
                'duration' => '1',
            ],
            [
                'user_id' => '4',
                'nopol' => 'D 8910 EF',
                'start_time' => '2023-10-30 09:00:00',
                'end_time' => '2023-10-30 11:00:00',
                'price' => '6000',
                'duration' => '2',
            ],
            [
                'user_id' => '2',
                'nopol' => 'D 2345 BC',
                'start_time' => '2023-10-31 18:00:00',
                'end_time' => '2023-10-31 19:00:00',
                'price' => '3000',
                'duration' => '1',
            ],
            [
                'user_id' => '3',
                'nopol' => 'D 5678 DE',
                'start_time' => '2023-11-01 12:00:00',
                'end_time' => '2023-11-01 13:00:00',
                'price' => '3000',
                'duration' => '1',
            ],
            [
                'user_id' => '1',
                'nopol' => 'D 6789 EF',
                'start_time' => '2023-11-02 16:00:00',
                'end_time' => '2023-11-02 18:00:00',
                'price' => '6000',
                'duration' => '2',
            ],
            [
                'user_id' => '4',
                'nopol' => 'D 7890 FG',
                'start_time' => '2023-11-03 10:00:00',
                'end_time' => '2023-11-03 12:00:00',
                'price' => '6000',
                'duration' => '2',
            ],
            [
                'user_id' => '2',
                'nopol' => 'D 8901 GH',
                'start_time' => '2023-11-04 14:00:00',
                'end_time' => '2023-11-04 17:00:00',
                'price' => '9000',
                'duration' => '3',
            ],
            [
                'user_id' => '3',
                'nopol' => 'D 9012 HI',
                'start_time' => '2023-11-05 11:00:00',
                'end_time' => '2023-11-05 12:00:00',
                'price' => '3000',
                'duration' => '1',
            ],
            [
                'user_id' => '4',
                'nopol' => 'D 0123 IJ',
                'start_time' => '2023-11-06 09:00:00',
                'end_time' => '2023-11-06 13:00:00',
                'price' => '12000',
                'duration' => '4',
            ],                           
            [
                'user_id' => '4',
                'nopol' => 'D 5678 IJ',
                'start_time' => '2023-12-13 11:05:00',
            ],
        ];
        foreach($orders as $order){
            Record::create($order);
        }
    }
}
