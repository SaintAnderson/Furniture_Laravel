<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Color;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Vite;

class ApiController extends Controller
{
    public function colors()
    {
        return Color::all();
    }
    public function brands()
    {
        $brands = Brand::select(['id', 'name'])->orderBy('name')->get();
        $brands = $brands->groupBy(function($brand) {
            return strtoupper(substr($brand->name, 0, 1));
        });
        return $brands;
    }
    public function products(Request $request)
    {
        $products = Product::select(['id', 'title', 'image_src','price', 'brand_id', 'category_id', 'color_id']);
        if ($request->color) {
            $products->orWhereIn('color_id', $request->color);
        }
        if ($request->brand) {
            $products->orWhereIn('brand_id', $request->brand);
        }

        $products = $products->get()->map(function ($product) {
            return [
                'id' => $product->id,
                'title' => $product->title,
                'image_src' => Vite::asset($product->image_src),
                'price' => number_format($product->price, 0, '.', ' '),
                'brand' => $product->brand->name,
                'category' => $product->category->name,
                'color' => $product->color->code,
            ];
        });

        return $products;
    }
}
