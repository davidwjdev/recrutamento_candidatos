@extends('layout')

@section('title')
Pessoas
@endsection

@section('content')
<div class="py-1">
    <a href="/pessoas/adicionar" class="btn btn-success btn-lg px-4 gap-3">Adicionar</a>
</div>
<div class="py-5">

    <table class="table table-hover table-responsive">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Profissão</th>
                <th scope="col">Localização</th>
                <th scope="col">Nivel</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @if(count($pessoas)==0)
            <tr>
                <td  colspan="6">Não existem pessoas cadastradas!</td>
            </tr>
            @else
            @foreach($pessoas as $key => $value)
            <tr>
                <th scope="row">{{$value->id}}</th>
                <td>{{$value->nome}}</td>
                <td>{{$value->profissao}}</td>
                <td>{{$value->localizacao}}</td>
                <td>{{$value->nivel}}</td>
                <td>
                    <a href="/pessoas/editar/id={{$value->id}}" class="btn btn-warning btn-lg px-4 gap-3">Editar</a>
                    <button data-bs-toggle="modal" data-bs-target="#modalDelete" class="btn btn-danger btn-lg px-4 gap-3">Apagar</button>      
                    @extends('pessoas.modal')
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>



<script type="text/javascript">
    $(document).ready(function() {
        $('.modal').modal('show');
    });
</script>

@endsection