@extends('layout')

@section('title', 'candidaturas')
@section('content')
    <h2>Candidatura</h2>
    <form action="{{ route('candidaturas.store') }}" id="candidatura-form" method="post">
        @csrf
        <div id="general-info" class="area-form">
            <div class="form-left-area">
                <div class="item-form">
                    <label for="idNome">Nome:</label>
                    <input type="text" name="nome" id="idNome">
                </div>
                <div class="item-form">
                    <label for="idEmail">Email:</label>
                    <input type="email" name="email" id="idEmail">
                </div>
                <div id="telefones-area">
                    <div class="item-form">
                        <label for="idTel1">Telefone 1:</label>
                        <input type="text" name="telefone1" id="idTel2" class="cx-small">
                    </div>
                    <div class="item-form">
                        <label for="idTel2">Telefone 2:</label>
                        <input type="text" name="telefone2" id="idTel2" class="cx-small">
                    </div>
                </div>
                <div class="item-form">
                    <label for="generos-area">Género:</label>
                    <div id="generos-area">
                        <div class="item-form">
                            <input type="radio" name="genero" id="idGenM" value="M">
                            <label for="idGenM">Masculino</label>
                        </div>
                        <div class="item-form">
                            <input type="radio" name="genero" id="idGenF" value="F">
                            <label for="idGenF">Feminino</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-right-area">
                <div id="origem-area">
                    <div class="title-items">Origem:</div>
                    <div class="item-form">
                        <input type="radio" name="origem" id="idOrigemP" value="P">
                        <label for="idOrigemP">Portugal</label>
                    </div>
                    <div class="item-form">
                        <input type="radio" name="origem" id="idOrigemUE" value="UE">
                        <label for="idOrigemUE">União Europeia</label>
                    </div>
                    <div class="item-form">
                        <input type="radio" name="origem" id="idOrigemO" value="O">
                        <label for="idOrigemO">Outra</label>
                    </div>
                </div>
            </div>
        </div>
        <div id="cand-dados-area" class="area-form">
            <div class="form-left-area">
                <div class="item-form">
                    <label for="idCurso">Curso pretendido:</label>
                    <select name="curso" id="idCurso">
                        @foreach ($cursos as $abr => $nome)
                            <option value="{{ $abr }}">{{ $nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="item-form">
                    <label for="idMedia">Média de entrada:</label>
                    <input type="number" name="media" id="idMedia" class="cx-small">
                </div>
                <div class="item-form m23-item">
                    <input type="hidden" name="m23" value="0">
                    <label for="idM23">Maior que 23:</label>
                    <input type="checkbox" name="m23" id="idM23" value="1">
                </div>
                <div class="item-form">
                    <label for="idObs">Observações: </label>
                    <textarea name="obs" id="idObs" rows="5"></textarea>
                </div>
            </div>
            <div class="form-right-area">
                <div id="estatutos-area">
                    <div class="title-items"> Estatutos Pretendidos:</div>
                    <div class="item-form">
                        <input type="checkbox" name="estatutos[]" id="idEstatutosTE" value="TE">
                        <label for="idEstatutosTE">Trabalhador-Estudante</label>
                    </div>
                    <div class="item-form">
                        <input type="checkbox" name="estatutos[]" id="idEstatutosNE" value="NE">
                        <label for="idEstatutosNE">Necessidades Especiais</label>
                    </div>
                    <div class="item-form">
                        <input type="checkbox" name="estatutos[]" id="idEstatutosE" value="E">
                        <label for="idEstatutosE">Erasmus</label>
                    </div>
                </div>

            </div>
        </div>
        <div class="bt-area">
            <button type="submit" class="bt">Enviar candidatura</button>
            <button type="reset" class="bt">Limpar</button>
        </div>
    </form>
    @dump($errors)
@endsection
