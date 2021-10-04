@extends('layout')

@section('title')
@if(isset($vaga->id))
Editar Vaga
@else
Criar Vaga
@endif
@endsection

@section('content')
<div class="py-1">
    <form method="POST">
        @csrf
        @if(isset($vaga->id))
        <div class="mb-3">
            <label for="empresa" class="form-label">Id: </label>
            <input type="number" class="form-control" id="id" name="id" aria-describedby="id" value="{{$vaga->id}}" disabled>
        </div>
        @endif
        <div class="mb-3">
            <label for="empresa" class="form-label">Empresa: </label>
            <input type="text" class="form-control" id="empresa" name="empresa" aria-describedby="empresa"
            value="{{isset($vaga->id) ? $vaga->empresa : ''}}">
        </div>
        <div class="mb-3">
            <label for="titulo" class="form-label">Título: </label>
            <input type="text" class="form-control" id="titulo" name="titulo" aria-describedby="titulo"
            value="{{isset($vaga->id) ? $vaga->titulo : ''}}">
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição: </label>
            <input type="text" class="form-control" id="descricao" name="descricao" aria-describedby="descricao"
            value="{{isset($vaga->id) ? $vaga->descricao : ''}}">
        </div>
        <div class="mb-3">
            <label for="localizacao" class="form-label">Localização: </label>
            <input type="text" class="form-control" id="localizacao" name="localizacao" aria-describedby="localizacao"
            value="{{isset($vaga->id) ? $vaga->localizacao : ''}}">
        </div>
        <div class="mb-3">
            <label for="nivel" class="form-label">Nivel de Experiencia: </label>
            <input type="number" class="form-control" id="nivel" name="nivel" aria-describedby="nivel"
            value="{{isset($vaga->id) ? $vaga->nivel : ''}}">
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="/vagas" class="btn btn-danger">Cancelar</a>

    </form>
</div>



@endsection