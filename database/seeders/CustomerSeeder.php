<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Hanin',
                'address' => 'Perum. Mayangan Baru no. 45 Wiradesa, Pekalongan'
            ],
            [
                'name' => 'Aurum NF',
                'address' => 'Perum. Mayangan Baru no. 45 Wiradesa, Pekalongan'
            ],
            [
                'name' => 'Aulia',
                'address' => 'Pabuaran, Purwokerto'
            ]
        ];
        foreach($data as $key => $value) {
            Customer::cerate($value);
        }
    }
}
