<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Usuario extends Model
{
    protected $fillable = ['nombre'];

    /**
     * Obtener las tareas del usuario.
     */
    public function tareas(): HasMany
    {
        return $this->hasMany(Tarea::class);
    }
}
