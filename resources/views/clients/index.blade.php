  @extends('app')

  @section('titulo', 'lista de Clientes')
  
  @section('conteudo')
  <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Endereco</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                <tr>
                    <th scope="row">{{$client->id}}</th>
                    <td><a href="{{ rout('clients.show', $client) }}">{{$client->nome}}</a></td>
                    <td>{{$client->endereco}}</td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection