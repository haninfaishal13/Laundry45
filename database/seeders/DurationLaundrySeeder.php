<?php

namespace Database\Seeders;

use App\Models\DurationLaundry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DurationLaundrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [ 'name' => 'Reguler' ],
            [ 'name' => 'Cepat' ],
            [ 'name' => 'Kilat' ]
        ];

        foreach($data as $key => $value) {
            DurationLaundry::create($value);
        }
    }
}
