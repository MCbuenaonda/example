<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProduct;
use App\Http\Requests\UpdateProduct;

class ProductController extends Controller {
    public function __construct() {
        $this->middleware('auth');

        // $this->middleware(['auth', 'rol.admin']);
        // $this->middleware('auth')->only('index');
        // $this->middleware('auth')->except('index');
    }

    /**
     * listado de los productos
     */
    public function index() {
        $products = Product::orderBy('id')->paginate(10);
        return view('products.index', ['products' => $products]);
    }

    /**
     *  Muestra la vista para la crecion de un producto
     */
    public function create() {
        // $tags = Tag::pluck('id','title');
        // $categories = Category::pluck('id', 'name');
        // return view('products.create', ['post' => new Post(), 'categories' => $categories, 'tags' => $tags]);
        return view('products.create', [ 'product' => new Product]);
    }

    /**
     * Guarda los datos del producto creado
     */
    public function store(StoreProduct $request) {
        $requestData = $request->validated();
        Product::create($requestData);
        return redirect()->action([ProductController::class, 'index'])->with('status', 'Data saved!');
    }

    /**
     * retorna el producto seleccionado
     */
    public function show(Product $product) {
        return view('products.show', [ 'product' => $product]);
    }

    /**
     * Muestra los datos a editar del producto
     */
    public function edit(Product $product) {
        return view('products.edit', [ 'product' => $product]);
    }

    /**
     * Actualiza los datos del producto
     */
    public function update(UpdateProduct $request, Product $product) {
        $requestData = $request->validated();
        $product->update($requestData);
        return redirect()->action([ProductController::class, 'index'])->with('status', 'Data updated!');
    }

    /**
     * Elimina el producto de la BD
     */
    public function destroy(Product $product) {
        $product->delete();
        return redirect()->action([ProductController::class, 'index'])->with('status', 'Data deteted!');
    }
}
