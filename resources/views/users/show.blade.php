@extends('layout')

<title>Vizualizar Usuario</title>

@section('body')

<br><br>
<div class="container">
  <div>
    <h1 class=" text-light" >Vizualizar Usuario</h2>
  </div>
<br><br>

<div class="table-responsive ">
      <table class="table text-light">
        <thead>
          <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Email </th>
            <th>Telefone</th> 
            <th>Tipo</th>   
            <th>Endereço</th>  
          </tr>
        </thead>
      
        <tbody>
          <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->cpf}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td>@if($user->type) Gerente @else Funcionario @endif</td>
            <td>{{$user->address}}</td>
          </tr>
      
        </tbody>
    </table>
  </div>
  
  <br><br>
  <div class="d-flex justify-content-center">
    <div class="d-flex">
      <a href="{{route('product.edit', $product->id)}}" class="btn btn-outline-success" >Editar</a>
    </div>
    <div class="d-flex">
      <a href="{{route('product.index', $product->id)}}" class="btn btn-outline-success" >Voltar</a>
    </div>
  </div>
</div>

@endsection

