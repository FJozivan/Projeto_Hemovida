<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class doadorController extends Controller
{
    //

    public function CadastroDoador() {
        $titulo = "Cadastro do doador";
        return view('cadastro_doador', compact('titulo'));
    }

    public function CadastrarDoador(Request $dados) {
        return "Cheguei";
    }
}
