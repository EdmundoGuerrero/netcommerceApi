<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Empresa extends Model
{
    protected $fillable = ['nombre'];

    /**
     * Obtener las tareas de la empresa.
     */
    public function tareas(): HasMany
    {
        return $this->hasMany(Tarea::class);
    }
}
