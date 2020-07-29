<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
     /**relacion 1:1 de perfil con usuarios */

     public function usuario()
     {
         return $this->belongsTo(User::class, 'user_id');
     }
}
