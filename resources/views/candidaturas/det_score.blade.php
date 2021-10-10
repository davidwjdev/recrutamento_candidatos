@extends('layout')

@section('title')
Score Candidatos
@endsection

@section('content')

<div class="py-5">

    <table class="table table-hover table-responsive">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Profissão</th>
                <th scope="col">Localização</th>
                <th scope="col">Nível</th>
                <th scope="col">Score</th>
            </tr>
        </thead>
        <tbody>

            @foreach($pessoas as $key => $value)
            <tr>
                <th scope="row">{{$value->id_pessoa}}</th>
                <th scope="row">{{$value->nome}}</th>
                <th scope="row">{{$value->profissao}}</th>
                <th scope="row">{{$value->localizacao}}</th>
                <th scope="row">{{$value->nivel}}</th>
                <th scope="row">{{$value->score}}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection