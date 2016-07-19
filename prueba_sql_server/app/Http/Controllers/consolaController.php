<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class consolaController extends Controller
{
    public function lista()
    {
        return view('vistaPrueba', [
            'var_1' => 'Variable 1',
            'var_2' => 'Variable 2',
            'var_3' => 'Variable 3',
            'var_4' => 'Variable 4',
            'var_5' => 'Variable 5'
        ]);
    }
}
