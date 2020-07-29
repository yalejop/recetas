<?php

namespace App\Http\Controllers;

use App\Receta;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    
    public function update(Request $request, Receta $receta)
    {
        //almacena los likes de un usuario a una receta
        return auth()->user()->meGusta()->toogle($receta);
    }

}
