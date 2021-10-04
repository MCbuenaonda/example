<?php

namespace App\Http\Controllers\api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\api\ApiResponseController;

class ProductController extends ApiResponseController {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $products = Product::where('active', true)->paginate(9);

        foreach ($products as $key => $product) {
            isset( $product->business ) ? $product->business : null ;
            isset( $product->business->company ) ? $product->business->company : null ;
        }

        return $this->successResponse($products);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

    /**
     * Display the specified resource.
     */
    public function show(Product $product) {
        isset( $product->business ) ? $product->business : null ;
        isset( $product->business->company ) ? $product->business->company : null ;
        return $this->successResponse($product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {}
}
