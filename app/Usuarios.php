<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    //
    protected $table = 'controlAcceso';
    protected $fillable=['nombreUsu','permiso'];

    public function autorizarUsuario($permiso)
    {
        if ($permiso == 1) {
            return true;

        }
        abort(401, 'No aceptado');
    }
}
