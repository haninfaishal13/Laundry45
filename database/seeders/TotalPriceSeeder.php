<?php

namespace Database\Seeders;

use App\Models\TotalPrice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TotalPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //typeLaundry, durationLaundry, typeCloth, price
        $data = [
            [
                "type_laundry_id" => '1', // Cuci Setrika
                "duration_id" => '1', // Reguler
                "type_cloth_id" => '1', // Baju kiloan
                "price" => '5000'
            ],
            [
                "type_laundry_id" => '1',
                "duration_id" => '1',
                "type_cloth_id" => '2',
                "price" => '3000'
            ],
            [
                "type_laundry_id" => '1',
                "duration_id" => '1',
                "type_cloth_id" => '3',
                "price" => '3000'
            ],
            [
                "type_laundry_id" => '1',
                "duration_id" => '1',
                "type_cloth_id" => '4',
                "price" => '2000'
            ],
            [
                "type_laundry_id" => '1',
                "duration_id" => '1',
                "type_cloth_id" => '4',
                "price" => '2000'
            ],
        ];
        foreach($data as $key => $value) {
            TotalPrice::create($value);
        }
    }
}
