@extends('layout_admin')

@section('title', 'Disciplinas')

@section('content')
    <div class="row mb-3">
        <div class="col-3">
            <a href="{{ route('admin.disciplinas.create') }}" class="btn btn-success" role="button"
                aria-pressed="true">Nova
                Disciplina</a>
        </div>
        <div class="col-9">
            <form method="GET" action="{{ route('admin.disciplinas') }}" class="form-group">
                <div class="input-group">
                    <select class="custom-select" name="curso" id="inputCurso" aria-label="Curso">
                        <option value="" {{ '' == old('curso', $selectedCurso) ? 'selected' : '' }}>Todos Cursos</option>
                        @foreach ($cursos as $abr => $nome)
                            <option value={{ $abr }}
                                {{ $abr == old('curso', $selectedCurso) ? 'selected' : '' }}>
                                {{ $nome }}</option>
                        @endforeach
                    </select>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">Filtrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <table class="table ">
        <thead>
            <tr>
                <th>Curso</th>
                <th>Ano</th>
                <th>Sem.</th>
                <th>Abr.</th>
                <th>Nome</th>
                <th>ECTS</th>
                <th>Horas</th>
                <th>Opcional</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($disciplinas as $disc)
                <tr>
                    <td>{{ $disc->curso }}</td>
                    <td>{{ $disc->ano }}</td>
                    <td>{{ $disc->semestre }}</td>
                    <td>{{ $disc->abreviatura }}</td>
                    <td>{{ $disc->nome }}</td>
                    <td>{{ $disc->ECTS }}</td>
                    <td>{{ $disc->horas }}</td>
                    <td>{{ $disc->opcional ? 'Sim' : '' }}</td>
                    <td nowrap>
                        <a href="{{ route('admin.disciplinas.edit', ['disciplina' => $disc]) }}"
                            class="btn btn-primary btn-sm" role="button" aria-pressed="true">
                            <i class="fas fa-pen"></i>
                        </a>
                        <form class="d-inline" action="#" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $disciplinas->withQueryString()->links() }}
@endsection
