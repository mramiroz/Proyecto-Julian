@extends('layouts.plantillaCuerpo')
@section('title','Productos')
@section('header')
    @include('_components.header')
@endsection
@section('content')
    @include('_components.categorias', ['categorias' => $categorias])
    <h2>Bienvenido {{ session('usuario.nombre')}} !!</h2>
    @include('_components.productos', ['productos' => $productos])
@endsection
