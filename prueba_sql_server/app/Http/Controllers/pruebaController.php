<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class pruebaController extends Controller
{

    public function saludo($frase)
    {
        return $frase;
    }

}