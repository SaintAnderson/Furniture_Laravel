<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Белый',
                'code' => 'white',
            ],
            [
                'name' => 'Оранжевый',
                'code' => '#ff9e0d',
            ],
            [
                'name' => 'Черный',
                'code' => 'black',
            ],
            [
                'name' => 'Коричневый',
                'code' => '#603E28',
            ],
            [
                'name' => 'Серый',
                'code' => '#808080',
            ],
        ];
        foreach ($data as $colorData) {
            Color::create($colorData);
        }
    }
}
