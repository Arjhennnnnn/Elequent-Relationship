<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function hasone(){
        // Has One
        // $product = Product::first()->detail;

        // Belongs To One
        $product = ProductDetail::find(2)->product;

        dd($product);
    }
    public function hasmany(){

        // Has Many
        // $product = Brand::find(2)->products;

        //Belongs To
        $product = Product::find(3)->brand;

        dd($product);
    }
    public function manymany(){
        //ManytoMany
        // $product = Product::find(2)->categories;

        //BelongsToMany
        $product = Category::find(2)->products;

        dd($product->toArray());
    }
}
