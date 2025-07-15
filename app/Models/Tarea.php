<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usuario;
use App\Models\Empresa;

class Tarea extends Model
{
    /** @use HasFactory<\Database\Factories\TareaFactory> */
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'empresa_id',
        'usuario_id',
    ];
    

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
    
    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }
    
}
