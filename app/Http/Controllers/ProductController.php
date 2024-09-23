<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //método para mostrar la página principal de los productos
    public function index() {
        return view('stores.products.index');
    }

    //método para mostrar el formulario para crear un nuevo producto
    public function create() {
        return view('stores.products.create');
    }

    //método para mostrar la información de un producto en específico
    public function show($product) {
        return view('stores.products.show', compact('product'));
    }
}
