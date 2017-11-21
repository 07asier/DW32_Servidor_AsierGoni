<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UsuariosController extends Controller
{
    public function index()
    {
        $nombreUsu=request()->get('nombreUsu');
        $Usuarios = new Usuarios();
        $Usuarios -> nombreUsu = $nombreUsu;

        $Usuarios->save();
        return (view('/usuarioaceptado'));


    }


}
