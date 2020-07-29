<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Receta extends Model
{
    //Campos que se agregaran
    protected $fillable = [
        'titulo', 'preparacion', 'ingredientes', 'imagen','categoria_id',
    ]; 
    
    //obtiene la categoria de la receta via FK
    public function categoria()
    {
        return $this->belongsTo(CategoriaReceta::class);
    }
    
    //obtener la información del usuario via FK
    public function autor() 
    {
        return $this->belongsTo(User::class, 'user_id'); //FK de esta tabla
    }

    //likes que ha recibido una receta. Relacion n:n
    public function likes()
    {
        return $this->BelongsToMany(User::class, 'likes_receta');
    }
}
