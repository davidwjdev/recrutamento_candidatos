@extends('layout')

@section('title')
@if(isset($pessoa->id))
Editar Pessoa
@else
Criar Pessoa
@endif
@endsection

@section('content')
<div class="py-1">
    <form method="POST">
        @csrf
        @if(isset($pessoa->id))
        <div class="mb-3">
            <label for="id" class="form-label">Id: </label>
            <input type="number" class="form-control" id="id" name="id" aria-describedby="id" value="{{$pessoa->id}}" disabled>
        </div>
        @endif
        <div class="mb-3">
            <label for="nome" class="form-label">Nome: </label>
            <input type="text" class="form-control" id="nome" name="nome" aria-describedby="nome"
            value="{{isset($pessoa->id) ? $pessoa->nome : ''}}">
        </div>
        <div class="mb-3">
            <label for="profissao" class="form-label">Profissão: </label>
            <input type="text" class="form-control" id="profissao" name="profissao" aria-describedby="profissao"
            value="{{isset($pessoa->id) ? $pessoa->profissao : ''}}">
        </div>
        <div class="mb-3">
            <label for="localizacao" class="form-label">Localização: </label>
            <input type="text" class="form-control" id="localizacao" name="localizacao" aria-describedby="localizacao"
            value="{{isset($pessoa->id) ? $pessoa->localizacao : ''}}">
        </div>
        <div class="mb-3">
            <label for="nivel" class="form-label">Nivel de Experiencia: </label>
            <input type="number" class="form-control" id="nivel" name="nivel" aria-describedby="nivel"
            value="{{isset($pessoa->id) ? $pessoa->nivel : ''}}">
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="/pessoas" class="btn btn-danger">Cancelar</a>

    </form>
</div>



@endsection