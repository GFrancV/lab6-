<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidatura extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'curso', 'nome', 'email', 'telefone1', 'telefone2',
        'genero', 'media', 'm23', 'origem', 'obs'
    ];
}
