<?php

namespace App\Http\Controllers;

use App\Receta;
use App\CategoriaReceta;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {

        //mostrar recetas por cantidad de votos
        //$votados = Receta::has('likes', '>', 1)->get();
        $votados = Receta::withCount('likes',)->orderBy('likes_count', 'desc')->take(3)->get();


        //obtener las recetas mas nuevas
        //$nuevas = Receta::orderBy('created_at', 'ASC')->get();
        $nuevas = Receta::latest()->take(5)->get();

        //$mexicana = Receta::where('categoria_id', 1)->get();
        $categorias = CategoriaReceta::all();

        //agrupar las recetas por categoria
        $recetas = [];

        foreach ($categorias as $categoria) {
            $recetas[ Str::slug($categoria->nombre)][] = Receta::where('categoria_id', $categoria->id)->take(3)->get();
        }

        return view('inicio.index', compact('nuevas', 'recetas', 'votados'));
    }
}
