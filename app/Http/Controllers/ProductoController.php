<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        return view('productos.index');
    }

    public function create(){

    }

    public function show($producto){

    }
}

