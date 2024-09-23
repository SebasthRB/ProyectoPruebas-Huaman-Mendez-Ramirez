<!-- Heredar el código de la plantilla -->
@extends('layouts.layout')

<!-- Modificar la sección del título -->
@section('title', 'Producto ' . $product)

<!-- Personalizar el contenido de la página (content)-->
@section('content')
    <h1>Está viendo la información del producto: {{$product}}</h1>
@endsection