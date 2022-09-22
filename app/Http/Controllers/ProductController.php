<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Models\Parttype;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){

//        $parttypes = Parttype::all();
//        $manufacturers = Manufacturer::all();
//        $products = Product::all();
//        $selectedParttypeId = null;
//        $selectedManufacturerId = null;
//
//        if($request->filled('selectParttypeId')){
//            $selectedParttypeId = $request->query('selectedParttypeId');
//        }
//
//        $records = Product::when($selectedParttypeId, function ($query, $selectedParttypeId){
//            return $query->where('parttypes_id', $selectedParttypeId);
//        })->paginate(10);


        return view('products',[
            'products' => Product::latest()->paginate(10),
            'manufacturers' => Manufacturer::all(),
            'parttypes' => Parttype::all()
        ]);

//        return view('products')->with(compact('selectedParttypeId', 'selectedParttypeId', 'products', 'manufacturers', 'parttypes'));
    }

    public function show(Product $product){
        return view('product',[
           'product' => $product
        ]);
    }
}
