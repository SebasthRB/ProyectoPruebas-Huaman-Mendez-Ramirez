<!-- Heredar el código de la plantilla -->
@extends('layouts.layout')

<!-- Modificar la sección del título -->
@section('title', 'Compra ' . $purchase)

<!-- Personalizar el contenido de la página (content)-->
@section('content')
    <h1>Está viendo la información de la compra: {{$purchase}}</h1>
@endsection