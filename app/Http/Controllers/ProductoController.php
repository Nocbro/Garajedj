<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        return view('productos.index');
    }
    public function create(){
        return view('productos.create');  
    }

    public function show(){
        
        $productos = Productos::all();

        return $productos;

        return view('productos.show', compact('productos'));
    }

    public function formulario(){
        return view('productos.formulario');
    }

    public function store(Request $request){
        
    }
}