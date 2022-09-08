@extends('layout')
<title>Cadastrar Usuarios</title>

@section('body')

<div class="container text-light">
    <br><br>
  <h1>Cadastro de Usuarios</h1>

  <form class="row g-3" action="{{route('user.store')}}" method="POST">
    @csrf
    <div class="col-12">
      <label for="inputName" class="form-label">Nome</label>
      <input type="text" class="form-control" name="name" id="Name ">
      @error('name')
        <div class="text-danger">
          {{ $message }}
        </div> 
      @enderror
    </div>

    <div class="col-md-6">
      <label for="inputCNPJ" class="form-label">CPF</label>
      <input type="text" class="form-control" name="CPF" id="inputCPF">
    </div>
    @error('cpf')
      <div class="text-danger">
        {{ $message }}
      </div> 
    @enderror

    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" id="inputEmail4">
      @error('email')
        <div class="text-danger">
          {{ $message }}
        </div> 
      @enderror
    </div>

    <div class="col-md-6">
      <label for="inputPhone" class="form-label">Phone</label>
      <input type="phone" class="form-control" name="phone" id="inputPhone">
      @error('name')
        <div class="text-danger">
          {{ $message }}
        </div> 
      @enderror    
    </div>

    <div class="col-md-4">
      <label for="inputEstado" class="form-label">Tipo</label>
      <select id="inputEstado" class="form-select">
        <option selected>Escolha...</option>
        <option>Funcionario</option>
        <option>Gerente</option>
      </select>
    </div> 

    <div class="col-md-6">
      <label for="inputSenha4" class="form-label">Senha</label>
      <input type="password" class="form-control" name="password" id="inputSenha4">
      @error('password')
        <div class="text-danger">
          {{ $message }}
        </div> 
      @enderror
    </div>


    <div class="col-12">
      <label for="inputAddress" class="form-label">Endereço </label>
      <input type="text" class="form-control" id="inputEndereço" name="address">
      @error('address')
        <div class="text-danger">
          {{ $message }}
        </div> 
      @enderror
    </div>

    <div class="col-12">
      <button class="btn btn-primary" type="submit" >Cadastrar</button>
    </div>

  </form>
</div>

@endsection
