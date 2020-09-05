<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuariosController extends Controller
{
    public function ApresentarFormularioLogin(){
        return view("usuarios_login");
    }
}
