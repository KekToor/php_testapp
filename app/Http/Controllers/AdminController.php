<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Models\Parttype;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin',[
            'products' => Product::latest()->paginate(10),
            'manufacturers' => Manufacturer::all(),
            'parttypes' => Parttype::all()
        ]);
    }
}
