<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PostController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function AboutPost(){
        return view('About');
    }

    public function Product()
    {
        return view('Product',
            [
                'Product_info'   => Product::all()
            ]
        );

    }

}

