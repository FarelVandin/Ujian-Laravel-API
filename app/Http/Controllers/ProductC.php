<?php

namespace App\Http\Controllers;

use App\Models\ProductsM;
use Illuminate\Http\Request;
use App\Http\Resources\ProductsR;

class ProductC extends Controller
{
    public function index(){
        $products = ProductsM::all();
        // return response()-> json($books);
        return ProductsR::collection($products);
    }

    public function detail($id){
        $products = ProductsM::findOrFail($id);
    return new ProductsR($products);
    }
}