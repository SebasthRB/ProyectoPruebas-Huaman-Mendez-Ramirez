<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //método para mostrar la página principal de los empleados
    public function index() {
        return view('stores.employees.index');
    }

    //método para mostrar el formulario para crear un nuevo empleado
    public function create() {
        return view('stores.employees.create');
    }

    //método para mostrar la información de un empleado en específico
    public function show($employee) {
        return view('stores.employees.show', compact('employee'));
    }
}
