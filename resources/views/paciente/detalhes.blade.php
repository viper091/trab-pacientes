@extends('layout.principal')

@section('conteudo')
<h1>Detalhes do paciente <?= $paciente->nome ?></h1>

<ul>
    <li>Descrição: {{$paciente->cpf}}</li>

    <li>tel: {{$paciente->tel}}</li>
</ul>
@stop