@extends('layouts.plantillaCuerpo')
@section('title', 'Carrito')
@section('header')
    @include('_components.header')
@endsection
@section('content')
    @include('_components.carrito', ['productos' => $productos])
@endsection
