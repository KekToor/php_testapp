<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Models\Parttype;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('products',[
            'products' => Product::latest()->paginate(10),
            'manufacturers' => Manufacturer::all(),
            'parttypes' => Parttype::all()
        ]);
    }

    public function show(Product $product){
        return view('product',[
           'product' => $product
        ]);
    }
}
