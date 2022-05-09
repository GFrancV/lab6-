<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;
    public function docentes()
    {
        return $this->belongsToMany(
            Docente::class,
            'docentes_disciplinas',
            'disciplina_id',
            'docente_id'
        );
    }
}
