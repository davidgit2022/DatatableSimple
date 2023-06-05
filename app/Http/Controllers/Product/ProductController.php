<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getData(Request $request){
        if ($request->ajax()) {
            return datatables()->of(Product::all())->toJson();
        }
        return view('products');
    }
}
