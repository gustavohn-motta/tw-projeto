@extends('app')
@section('titulo', 'detalhes')
@section('conteudo')
<div class="card">
    <div class="card-header">
        Detalhes do Cliente {{$client->nome}}
    </div>
    <div class="card-body">
        <p>ID: {{$client->id}}</p>
        <p>ID: {{$client->nome}}</p>
        <p>ID: {{$client->endereco}}</p>
        <p>ID: {{$client->obs}}</p>
    </div>

    <a href="{{ rout('clients.index') }}" class="btn btn-primary"></a>
</div>
@endsection