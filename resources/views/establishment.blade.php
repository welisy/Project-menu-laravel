@extends('layout')

<title>Dados do Estabelecimento</title>

@section('body')

<br><br>
  <div class="container">
    <div>
      <h1 class=" text-light" >Vizualizar Estabelecimento</h2>
    </div>
    <br><br>

    <div class="table-responsive ">
      <table class="table text-light">
          <thead>
            <tr>
              <th>Nome Fantasia</th>
              <th>Razão Social</th>
              <th>CNPJ</th>
              <th>Telefone</th> 
              <th>Endereço</th> 
            </tr>
          </thead>
        
          <tbody>
            @foreach ($establishment as $establishment)
            <tr>
              <td>{{$establishment->trading_name}}</td>
              <td>{{$establishment->company_name}}</td>
              <td>{{$establishment->cnpj}}</td>
              <td>{{$establishment->phone}}</td>
              <td>{{$establishment->address}}</td>
            </tr>
            @endforeach
          </tbody>
      </table>
    </div>
    
    <br><br>

  </div>

@endsection

