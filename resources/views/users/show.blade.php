@extends('layout')

@section('body')

<br><br>
<div class="container">
  <div>
    <h1 class="text-center text-light" >Vizualizar Usuarios</h2>
  </div>
<br><br>

  <ul class="list-group list-group-flush">  
    <li class="list-group-item">{{$user->name}}</li>   
    <li class="list-group-item">{{$user->cpf}}</li>   
    <li class="list-group-item">{{$user->phone}}</li>   
    <li class="list-group-item">{{$user->email}}</li>
    <li class="list-group-item">{{$user->address}}</li>
    <li class="list-group-item">@if($user->type) Gerente @else Funcionario @endif </li> 
  </ul>
  
  <br><br>
  
  <div class="d-flex">
    <a href="{{route('user.edit', $user->id)}}" class="btn btn-outline-success" >Editar</a>
  </div>
  <div class="d-flex">
    <a href="{{route('user.index', $user->id)}}" class="btn btn-outline-success" >Voltar</a>
  </div>
</div>

@endsection

