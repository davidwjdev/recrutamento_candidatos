@extends('layout')

@section('title')
Vagas
@endsection

@section('content')
<div class="py-1">
    <a href="/vagas/adicionar" class="btn btn-success btn-lg px-4 gap-3">Adicionar</a>
</div>
<div class="py-5">
    <table class="table table-hover table-responsive">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Empresa</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descrição</th>
                <th scope="col">Localização</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($vagas))
            @foreach($vagas as $key => $value)
            <tr>
                <th scope="row">1</th>
                <td>{{$value->empresa}}</td>
                <td>{{$value->titulo}}</td>
                <td>{{$value->descricao}}</td>
                <td>{{$value->localizacao}}</td>
                <td>
                    <a href="/vagas/edit/{{$vaga->id}}" class="btn btn-warning btn-lg px-4 gap-3">Editar</a>
                    <a href="/vagas/destroy/{{$vaga->id}}" class="btn btn-danger btn-lg px-4 gap-3">Apagar</a>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td scope="row" colspan="6">Não existem vagas cadastradas!</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection