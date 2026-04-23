<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    //
    public function show(){
        $category = 'Mouse';
        $button = '<button>Click me</button>';
        return view('home',[
            // 'product_category' => $category,
            // 'product_name' => 'Logitech G502 Hero',
            // 'button' => $button
            'product_categories' => ProductCategory::with(['products'])->get()
        ]);
    }
}
