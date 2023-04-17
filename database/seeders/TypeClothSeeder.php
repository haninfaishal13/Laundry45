<?php

namespace Database\Seeders;

use App\Models\TypeCloth;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeClothSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Baju Kiloan'],
            ['name' => 'Selimut'],
            ['name' => 'Bed Cover'],
            ['name' => 'Sprei']
        ];

        foreach($data as $key => $value) {
            TypeCloth::create($value);
        }
    }
}
