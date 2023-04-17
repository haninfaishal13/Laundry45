<?php

namespace Database\Seeders;

use App\Models\TypeLaundry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeLaundrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Cuci Setrika'],
            ['name' => 'Cuci'],
            ['name' => 'Setrika'],
        ];
        foreach($data as $key => $value) {
            TypeLaundry::create($value);
        }
    }
}
