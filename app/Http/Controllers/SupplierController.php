<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //método para mostrar la página principal de los empleados
    public function index() {
        return view('stores.suppliers.index');
    }

    //método para mostrar el formulario para crear un nuevo empleado
    public function create() {
        return view('stores.suppliers.create');
    }

    //método para mostrar la información de un empleado en específico
    public function show($supplier) {
        return view('stores.suppliers.show', compact('supplier'));
    }
}
