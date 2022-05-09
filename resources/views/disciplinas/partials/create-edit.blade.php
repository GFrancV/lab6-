<div class="form-group">
    <label for="inputAbr">Abreviatura</label>
    <input type="text" class="form-control" name="abreviatura" id="inputAbr" value="{{ $disciplina->abreviatura }}" />
    <div class="small text-danger"> Mensagem de erro - Exemplo. </div>
</div>
<div class="form-group">
    <label for="inputNome">Nome</label>
    <input type="text" class="form-control" name="nome" id="inputNome" value="{{ $disciplina->nome }}" />
    <div class="small text-danger"> Mensagem de erro - Exemplo. </div>
</div>
<div class="form-group">
    <label for="inputCurso">Curso</label>
    <select class="form-control" name="curso" id="inputCurso">
        @foreach ($cursos as $curso)
            <option value="{{ $curso->abreviatura }}"
                {{ $disciplina->curso == $curso->abreviatura ? 'selected' : '' }}>{{ $curso->nome }}</option>
        @endforeach
    </select>
    <div class="small text-danger"> Mensagem de erro - Exemplo. </div>
</div>
<div class="form-group">
    <div>Ano</div>
    <div class="form-check form-check-inline">
        <input type="hidden" name="ano" value="">
        <input type="radio" class="form-check-input" id="inputAno1" name="ano" value="1"
            {{ $disciplina->ano == 1 ? 'checked' : '' }}>
        <label class="form-check-label" for="inputAno1"> 1 </label>
        <input type="radio" class="form-check-input ml-4" id="inputAno2" name="ano" value="2"
            {{ $disciplina->ano == 2 ? 'checked' : '' }}>
        <label class="form-check-label" for="inputAno2"> 2 </label>
        <input type="radio" class="form-check-input ml-4" id="inputAno3" name="ano" value="3"
            {{ $disciplina->ano == 3 ? 'checked' : '' }}>
        <label class="form-check-label" for="inputAno3"> 3 </label>
    </div>
    <div class="small text-danger"> Mensagem de erro - Exemplo. </div>
</div>
<div class="form-group">
    <div>Semestre</div>
    <div class="form-check form-check-inline">
        <input type="hidden" name="semestre" value="">
        <input type="radio" class="form-check-input" id="inputSemestre1" name="semestre" value="1"
            {{ $disciplina->semestre == 1 ? 'checked' : '' }}>
        <label class="form-check-label" for="inputSemestre1"> 1 </label>
        <input type="radio" class="form-check-input ml-4" id="inputSemestre2" name="semestre" value="2"
            {{ $disciplina->semestre == 2 ? 'checked' : '' }}>
        <label class="form-check-label" for="inputSemestre2"> 2 </label>
    </div>
    <div class="small text-danger"> Mensagem de erro - Exemplo. </div>
</div>
<div class="form-group">
    <label for="inputECTS">ECTS</label>
    <input type="text" class="form-control" name="ECTS" id="inputECTS" value="{{ $disciplina->ECTS }}" />
    <div class="small text-danger"> Mensagem de erro - Exemplo. </div>
</div>
<div class="form-group">
    <label for="inputHoras">Horas</label>
    <input type="text" class="form-control" name="horas" id="inputHoras" value="{{ $disciplina->horas }}" />
    <div class="small text-danger"> Mensagem de erro - Exemplo. </div>
</div>
<div class="form-group">
    <div class="form-check form-check-inline">
        <input type="hidden" name="opcional" value="0">
        <input type="checkbox" class="form-check-input" id="inputOpcional" name="opcional" value="1"
            {{ $disciplina->opcional == 1 ? 'checked' : '' }}>
        <label class="form-check-label" for="inputOpcional"> Opcional </label>
    </div>
    <div class="small text-danger"> Mensagem de erro - Exemplo. </div>
</div>
