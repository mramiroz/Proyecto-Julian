@extends('layouts.plantillaCuerpo')
@section('title','Home')
@section('header')
    @include('_components.header')
    @include('_components.categorias', ['categorias' => $categorias])
@endsection
@section('content')
    @if(Auth::check())
        <h2>Bienvenido {{ Auth::user()->nombre }} !!</h2>
    @else
        <h2>Bienvenido !!</h2>
    @endif
    @include('_components.productos', ['productos' => $productos])
@endsection
