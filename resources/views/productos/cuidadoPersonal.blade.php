@extends('layouts.plantillaCuidadoPersonal')
@section('title','Productos')
@section('header')
    @include('_components.header')
@endsection
@section('categorias')
    @include('_components.categorias')
@endsection
@section('productos-cuidadoPersonal')
    @include('_components.productos')
@endsection

