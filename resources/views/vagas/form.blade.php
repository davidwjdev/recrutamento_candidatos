@extends('layout')

@section('title')
Criar Vaga
@endsection

@section('content')
<div class="py-1">
    <form method="POST" action="{{ url('vagas/adcicionar') }}">
        @csrf
        <div class="mb-3">
            <label for="empresa" class="form-label">Empresa: </label>
            <input type="empresa" class="form-control" id="empresa" name="empresa" aria-describedby="empresa">
        </div>
        <div class="mb-3">
            <label for="titulo" class="form-label">Título: </label>
            <input type="titulo" class="form-control" id="titulo" name="titulo" aria-describedby="titulo">
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição: </label>
            <input type="descricao" class="form-control" id="descricao" name="descricao" aria-describedby="descricao">
        </div>
        <div class="mb-3">
            <label for="localizacao" class="form-label">Localização: </label>
            <input type="localizacao" class="form-control" id="localizacao" name="localizacao" aria-describedby="localizacao">
        </div>
        <div class="mb-3">
            <label for="nivel" class="form-label">Nivel de Experiencia: </label>
            <input type="nivel" class="form-control" id="nivel" name="nivel" aria-describedby="nivel">
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="/vagas" class="btn btn-danger">Cancelar</a>

    </form>
</div>



@endsection