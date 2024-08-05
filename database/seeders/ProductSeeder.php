<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'CLUB DOUBLE',
                'category_id' => '1',
                'color_id' => '2',
                'brand_id' => '3',
                'image_src' => '/resources/images/product.png',
                'price' => '1200',
            ],
            [
                'title' => 'TACCIA',
                'category_id' => '2',
                'color_id' => '1',
                'brand_id' => '2',
                'image_src' => '/resources/images/img.png',
                'price' => '2000',
            ],
            [
                'title' => 'PICABIA',
                'category_id' => '3',
                'color_id' => '1',
                'brand_id' => '2',
                'image_src' => '/resources/images/img_1.png',
                'price' => '3000',
            ],
            [
                'title' => 'Allen',
                'category_id' => '1',
                'color_id' => '2',
                'brand_id' => '3',
                'image_src' => '/resources/images/img_2.png',
                'price' => '2000',
            ],
            [
                'title' => 'Benson',
                'category_id' => '2',
                'color_id' => '2',
                'brand_id' => '3',
                'image_src' => '/resources/images/img_3.png',
                'price' => '3000',
            ],
            [
                'title' => 'Powell',
                'category_id' => '3',
                'color_id' => '3',
                'brand_id' => '4',
                'image_src' => '/resources/images/img_4.png',
                'price' => '2500',
            ],
            [
                'title' => 'Carnaby',
                'category_id' => '3',
                'color_id' => '3',
                'brand_id' => '4',
                'image_src' => '/resources/images/img_5.png',
                'price' => '3500',
            ],
            [
                'title' => 'Halley Outdoor',
                'category_id' => '4',
                'color_id' => '1',
                'brand_id' => '2',
                'image_src' => '/resources/images/img_6.png',
                'price' => '6000',
            ],
            [
                'title' => 'DOT',
                'category_id' => '5',
                'color_id' => '3',
                'brand_id' => '4',
                'image_src' => '/resources/images/img_7.png',
                'price' => '7000',
            ],
        ];
        foreach ($data as $productData) {
            Product::create($productData);
        }
    }
}
