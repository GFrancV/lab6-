<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function index(Request $request)
    {
        $listaDisciplinas = Disciplina::all();
        $id = $request->query('disc', $listaDisciplinas[0]->id);
        $disciplina = Disciplina::findOrFail($id);
        $docentes = $disciplina->docentes;
        return view(
            'docentes.index',
            compact('docentes', 'listaDisciplinas', 'disciplina')
        );
    }
}
