@extends('layouts.plantillaCuerpo')
@section('header')
    @include('_components.header')
@endsection
@section('content')
    <h1>Editar Producto</h1>
    @include('_components.gestor.update')
@endsection
