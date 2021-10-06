@extends('layout')

@section('title')
@if(isset($candidatura->id))
Editar Candidatura
@else
Criar Candidatura
@endif
@endsection


@section('content')
<div class="py-1">
    <form method="POST">
    @csrf
        <div class="mb-3">
            <label for="id_vaga" class="form-label">Vaga: </label>
            <select id="id_vaga" class="form-select" name="id_vaga">
                <option default>Selecione a Vaga</option>
                @foreach($vagas as $key => $value)
                <option value="{{$value->id}}">{{$value->id}} - Empresa: {{$value->empresa}} - Titulo: {{$value->titulo}} - Localização: {{$value->localizacao}} - Nivel: {{$value->nivel}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="id_pessoa" class="form-label">Pessoa: </label>
            <select id="id_pessoa" class="form-select" name="id_pessoa">
                <option default>Selecione a Pessoa</option>
                @foreach($pessoas as $key => $value)
                <option value="{{$value->id}}">{{$value->id}} - Nome: {{$value->nome}} - Profissão: {{$value->profissao}} - Localização: {{$value->localizacao}} - Nivel: {{$value->nivel}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="/candidaturas" class="btn btn-danger">Cancelar</a>

    </form>
</div>



@endsection