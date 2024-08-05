<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'настенный светильник',
            ],
            [
                'name' => 'настольный светильник',
            ],
            [
                'name' => 'двухспальная кровать',
            ],
            [
                'name' => 'диван',
            ],
            [
                'name' => 'журнальный столик',
            ],
            [
                'name' => 'двухспальная кровать',
            ],
        ];
        foreach ($data as $categoryData) {
            Category::create($categoryData);
        }
    }
}
