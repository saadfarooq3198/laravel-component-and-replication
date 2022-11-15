<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = [
            [
                'name' => 'Shampoo',
                'description' => 'This is a product',
                'price' => 9998
            ],
            [
                'name' => 'Shampoo',
                'description' => 'This is a product',
                'price' => 9998
            ],
            [
                'name' => 'Shampoo',
                'description' => 'This is a product',
                'price' => 9998
            ],
            [
                'name' => 'Shampoo',
                'description' => 'This is a product',
                'price' => 9998
            ],
            [
                'name' => 'Shampoo',
                'description' => 'This is a product',
                'price' => 9998
            ]
        ];
        return view('products.index',compact('products'));
    }
}
