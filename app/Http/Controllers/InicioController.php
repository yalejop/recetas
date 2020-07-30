<?php

namespace App\Http\Controllers;

use App\Receta;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {

        //obtener las recetas mas nuevas
        //$nuevas = Receta::orderBy('created_at', 'ASC')->get();
        $nuevas = Receta::latest()->take(5)->get();

        return view('inicio.index', compact('nuevas'));
    }
}
