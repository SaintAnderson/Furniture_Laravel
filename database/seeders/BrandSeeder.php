<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Artemide',
            ],
            [
                'name' => 'Axo light',
            ],
            [
                'name' => 'PICABIA',
            ],
            [
                'name' => 'Benson',
            ],
            [
                'name' => 'Bonaldo',
            ],
            [
                'name' => 'Baxter',
            ],
        ];
        foreach ($data as $brandData) {
            Brand::create($brandData);
        }
    }
}
