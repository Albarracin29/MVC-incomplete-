<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function Product()
    {
        return view('Product',
            [
                'Product_info'   => Product::all()
            ]
        );

    }

}