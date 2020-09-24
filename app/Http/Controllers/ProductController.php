<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $all  = Product::all();
        return "$all";
    }

    public function add() {
        $p = [
            'name' => "新增的商品",
            'price' => 12000
        ];
        Product::create($p);
        $all  = Product::all();
        return "$all";
    }
}
