@extends('layout')

@section('title')
Candidaturas
@endsection

@section('content')

<div class="py-1">
    <a href="/candidaturas/adicionar" class="btn btn-success btn-lg px-4 gap-3">Adicionar</a>
</div>
<div class="py-5">

    <table class="table table-hover table-responsive">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titulo da Vaga</th>
                <th scope="col">Nome da Pessoa</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @if(count($candidaturas)==0)
            <tr>
                <td  colspan="6">Não existem candidaturas cadastradas!</td>
            </tr>
            @else
            @foreach($candidaturas as $key => $value)
            <tr>
                <th scope="row">{{$value->id}}</th>
                <th scope="row">{{$value->titulo}}</th>
                <th scope="row">{{$value->nome}}</th>
                <td>
                    <a href="/candidaturas/editar/id={{$value->id}}" class="btn btn-warning btn-lg px-4 gap-3">Editar</a>
                    <button data-bs-toggle="modal" data-bs-target="#modalDelete" class="btn btn-danger btn-lg px-4 gap-3">Apagar</button>      
                    @extends('candidaturas.modal')
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