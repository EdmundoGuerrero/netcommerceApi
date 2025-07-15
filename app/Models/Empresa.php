<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tarea;

class Empresa extends Model
{
    /** @use HasFactory<\Database\Factories\EmpresaFactory> */   

    use HasFactory;

    public function tareas()
    {
        return $this->hasMany(Tarea::class);
    }
    
}
