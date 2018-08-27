<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class Usuario extends Model
{
    protected $fillable = ['nome', 'dt_entrega', 'p_partida', 'destino'];
    
    public static function allUsers(){
        return self::all();
    }
    public static function cadastroUsers(){
        $input = Input::all();
        $user = new Usuario();
        $user->fill($input);
        $user->save();
        return $user;
    }
}
