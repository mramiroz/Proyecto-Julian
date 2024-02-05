@extends('layouts.plantillaCuerpo')
@section('title','Productos')
@section('header')
    @include('_components.header')
@endsection
@section('categorias')
    @include('_components.categorias')
@endsection
@section('productos-expuestos')
    @include('_components.productos', ['productos' => $productos])
@endsection
