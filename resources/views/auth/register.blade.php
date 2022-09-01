@extends('layout')

@section('body')

<div class="container text-light">
    <br><br>
  <h1>Cadastro de Estabelecimento</h1>

  <form class="row g-3" action="{{route('user.store')}}" method="POST">
    @csrf
    <div class="col-12">
      <label for="inputNome" class="form-label">Nome</label>
      <input type="text" class="form-control" name="name" id="Nome ">
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

    <div class="col-md-6">
      <label for="inputCidade" class="form-label">Cidade</label>
      <input type="text" class="form-control" id="inputCidade" name="city">
      @error('city')
        <div class="text-danger">
          {{ $message }}
        </div> 
        @enderror
    </div>

    <div class="col-md-4">
      <label for="inputEstado" class="form-label">Estado</label>
      <select id="inputEstado" class="form-select">
        <option selected>Escolha...</option>
        <option>São Paulo</option>
        <option>Paraná</option>
        <option>Rio de Janeiro</option>
        <option>Santa Catarina</option>
      </select>
    </div> 
    
    <div class="col-md-2">
        <label for="inputCEP" class="form-label">CEP</label>
        <input type="text" class="form-control" id="inputCEP" name="cep" > 
        @error('cep')
        <div class="text-danger">
          {{ $message }}
        </div> 
        @enderror
    </div>

    <div class="col-md-2">
      <label for="inputNº" class="form-label">Nº</label>
      <input type="number" class="form-control" id="inputNº" name="number">
      @error('number')
        <div class="text-danger">
          {{ $message }}
        </div> 
        @enderror
    </div>

    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">Check me out</label>
      </div>
    </div> 

    <div class="col-12">
      <button class="btn btn-primary" type="submit" >Cadastrar</button>
    </div>

  </form>
</div>
@endsection
