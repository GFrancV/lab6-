<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    public function admin_index(Request $request){
        $curso = $request->curso ?? '';

        $qry = Disciplina::query();
        if ($curso) {
            $qry->where('curso', $curso);
        }
        $disciplinas = $qry->paginate(10);
        $cursos = Curso::pluck('nome', 'abreviatura');

        return view('disciplinas.admin', ['disciplinas' => $disciplinas, 'cursos' => $cursos, 'selectedCurso' => $curso] );
    }
    public function index(Request $request){
        $cursos = Curso::pluck('nome', 'abreviatura');
        $curso = $request->query('curso', 'EI');
        $ano = $request->ano ?? 1;
        $discSem1 = Disciplina::where('curso', $curso)
            ->where('ano', $ano)
            ->where('semestre', 1)
            ->get();
        $discSem2 = Disciplina::where('curso', $curso)
            ->where('ano', $ano)
            ->where('semestre', 2)
            ->get();
        return view('disciplinas.index',
        compact('discSem1','discSem2','ano','curso','cursos'));
    }

    public function edit(Disciplina $disciplina){
        $cursos = Curso::all();
        return view('disciplinas.edit', ['disciplina' => $disciplina, 'cursos' => $cursos]);
    }

    public function create(){
        $cursos = Curso::all();
        $disciplina = new Disciplina();
        return view('disciplinas.create', ['disciplina' => $disciplina, 'cursos' => $cursos]);
    }
}
