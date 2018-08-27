<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
class UserController extends Controller
{    
    ##Metodo aonde ira ter toda a base de cadastro
    public function allUsers(){
        return Usuario::allUsers();
    }
    
    ##
    ##Metodo aonde so podera buscar um cadastro por vez
    public function umUsers(){
        return "busca apenas um usuario";
    }
    ##
    ##Metodo aonde ira fazer o cadastro do usuario
    public function cadastroUsers(){
        return Usuario::cadastroUsers();
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
    }}
