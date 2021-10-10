@extends('layout')

@section('title')
Vagas
@endsection

@section('content')

<div class="py-5">

    <table class="table table-hover table-responsive">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Empresa</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descrição</th>
                <th scope="col">Localização</th>
                <th scope="col">Nivel</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @if(count($vagas)==0)
            <tr>
                <td scope="row" colspan="7">Não existem vagas cadastradas!</td>
            </tr>
            @else
            @foreach($vagas as $key => $value)
            <tr>
                <th scope="row">{{$value->id}}</th>
                <td>{{$value->empresa}}</td>
                <td>{{$value->titulo}}</td>
                <td>{{$value->descricao}}</td>
                <td>{{$value->localizacao}}</td>
                <td>{{$value->nivel}}</td>
                <td>
                    <a href="/candidaturas/score/id_candidatura={{$value->id}}" class="btn btn-success btn-lg px-4 gap-3">Ver candidatos</a>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>

@endsection