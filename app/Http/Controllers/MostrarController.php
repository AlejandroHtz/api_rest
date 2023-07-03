<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MostrarController extends Controller
{
    public function index()
    {
        $usuarios = Http::get('http://127.0.0.1:8000/api/usuarios');
        $usuariosarr= $usuarios->json();
        return view('usuariosm', compact('usuariosarr'));
        
    }
}
