@extends('layout')
<title>Funcionários</title>

@section('body')
<br>

<div class="container">
  <h1 style="color:white" >FUNCIONÁRIOS</h1>

  <div class="table-responsive ">

      <table class="table text-light ">

        <thead>
          <tr>
            <th>ID</th>
            <th>Nome </th>
            <th>CPF </th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Tipo</th>
            <th>Vizualizar</th>
            <th>Editar</th>
            <th>Remover</th>
          </tr>
        </thead>
        <tbody>
          
          @foreach ($users as $user)
          <tr>  
            <th scope='row'>1</th>
            <td>{{$user->name}}</td>
            <td>{{$user->cpf}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->type == 'manager'?'Gerente':'Funcionario'}}</td>
            <td>
                <a href="#">
                  <button type="button" name="button" >
                <ion-icon name="eye-outline"></ion-icon>
                </button> </a>
              </td>
              
              <td>
                <a href="#">
                  <button type="button" name="button" >
                <ion-icon name="brush-outline"></ion-icon>
              </button> </a>
            </td>

            <td>
              <a href="#">
                <button type="button" name="button" >
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM31.1 128H416V448C416 483.3 387.3 512 352 512H95.1C60.65 512 31.1 483.3 31.1 448V128zM111.1 208V432C111.1 440.8 119.2 448 127.1 448C136.8 448 143.1 440.8 143.1 432V208C143.1 199.2 136.8 192 127.1 192C119.2 192 111.1 199.2 111.1 208zM207.1 208V432C207.1 440.8 215.2 448 223.1 448C232.8 448 240 440.8 240 432V208C240 199.2 232.8 192 223.1 192C215.2 192 207.1 199.2 207.1 208zM304 208V432C304 440.8 311.2 448 320 448C328.8 448 336 440.8 336 432V208C336 199.2 328.8 192 320 192C311.2 192 304 199.2 304 208z"/></svg>
                  <i class="fa-solid fa-trash-can"></i>
                </button> </a>
           </td>
          <td> <a href="{{route('user.edit', $user->id)}}">Editar</a></td>
          </tr>
          @endforeach
  </div>       
</div>         
@endsection