@extends('layouts.plantillaCuerpo')
@section('title','Home')
@section('header')
    @include('_components.header')
@endsection
@section('content')
    @include('_components.categorias')
    <h2>{{ session('usuario.nombre')}}</h2>
    @include('_components.productos', ['productos' => $productos])
@endsection
