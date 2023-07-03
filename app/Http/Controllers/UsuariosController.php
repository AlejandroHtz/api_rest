<?php

namespace App\Http\Controllers;



use App\Models\Usuarios;
use Illuminate\Http\Request;


class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return Usuarios::all();
    }

    public function store(Request $request)
    {

    }
}
