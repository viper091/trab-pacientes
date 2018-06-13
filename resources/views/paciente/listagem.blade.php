@extends('layout.principal')

@section('conteudo')

@if(old('nome'))
    <div class="alert alert-success">
        <strong>Sucesso!</strong> O paciente {{old('nome')}} foi adicionado.
    </div>
@endif

<h1>Listagem de produtos com Laravel</h1>

<table class="table table-striped table-bordered table-hover">

    @foreach ($pacientes as $p)

        <tr class="{{$p->id <= 1 ? 'table-danger' : ''}}">
            <td>{{$p->nome}}</td>
            <td>{{$p->cpf}}</td>
            <td>{{$p->tel}}</td>
            <td><a href="/pacientes/mostra/{{$p->id}}">
                Visualizar
                <!-- span class="glyphicon glyphicon-search"></span -->
            </a></td>
            <td><a href="/pacientes/remove/{{$p->id}}">
                Remover
                <span class="glyphicon glyphicon-trash"></span>
            </a></td>
        </tr>

    @endforeach

</table>
@stop