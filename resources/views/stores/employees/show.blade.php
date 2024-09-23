<!-- Heredar el código de la plantilla -->
@extends('layouts.layout')

<!-- Modificar la sección del título -->
@section('title', 'Empleado ' . $employee)

<!-- Personalizar el contenido de la página (content)-->
@section('content')
    <h1>Está viendo la información del empleado: {{$employee}}</h1>
@endsection