@extends('layout.principal')

@section('conteudo')

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h1>Formulário de produto</h1>

<form action="/pacientes/adiciona" method="post">

<input name="_token" type="hidden" value="{{csrf_token()}}">

    <div class="form-group">
        <label>Nome</label>
        <input name="nome" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label>Cpf</label>
        <input name="cpf" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label>Telefone</label>
        <input name="tel" type="text" class="form-control">
    </div>

    <button class="btn btn-primary" type="submit">Adicionar</button>

</form>
@stop