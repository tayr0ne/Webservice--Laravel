<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use app\Usuario;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    ##
    ##Metodo aonde ira ter toda a base de cadastro

    public function allUsers(){
        $teste = Usuario::teste();
        return $teste;
    }
    
    ##
    ##Metodo aonde so podera buscar um cadastro por vez
    public function umUsers(){
        return "busca apenas um usuario";
    }
    ##
    ##Metodo aonde ira fazer o cadastro do usuario
    public function cadastroUsers(){
        return "cadastro feito com sucesso!";
    }
    ##
    ##Metodo aonde podera fazer o update do cadastro
    public function updateUsers(){
        return "atualizando cadastro";
    }
    ##
    ##Metodo aonde ira deletar o cadastro
    public function deteleUser(){
        return "Função selecionar tudo";
    }

}
