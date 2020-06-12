<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\addProductRequest;
use App\Models\Products;

class addProductController extends Controller
{
    public function submit(addProductRequest $par) {

        $addProduct = new Products();
        $addProduct->name = $par->input('name');
        $addProduct->price = $par->input('price');
        $addProduct->quantity = $par->input('quantity');
        $addProduct->description = $par->input('description');
        
        $addProduct->save();

        return redirect()->route('home')->with('success', 'Товар был добавлен');
        
    }

    public function allProducts() {

         return view('pageAllProducts', ['data' => Products::all()]);
         dd(Products::all());

    }
}
