@extends('layout')

@section('body')
    <title>Dados da Empresa</title>
  
  <div class="container bg-dark text-white">

  <br>
    <h1 style="color:white">Dados da Empresa</h1>

    <form class="row g-3">
      <div class="col-md-6">
        <label for="inputCNPJ" class="form-label">CNPJ</label>
        <input type="CNPJ" class="form-control" id="inputCNPJ">
      </div>
      <div class="col-md-6">
        <label for="inputRazãoSocial" class="form-label">Razão Social</label>
        <input type="RazãoSocial" class="form-control" id="inputRazãoSocial">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="inputSenha4" class="form-label">Senha</label>
        <input type="password" class="form-control" id="inputSenha4">
      </div>
      <div class="col-12">
        <label for="inputNome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="Nome " placeholder="jão">
      </div>
      <div class="col-12">
        <label for="inputEndereço" class="form-label">Endereço </label>
        <input type="text" class="form-control" id="inputEndereço" placeholder="Apartamento, studio, Andar">
      </div>
      <div class="col-md-6">
        <label for="inputCidade" class="form-label">Cidade</label>
        <input type="text" class="form-control" id="inputCidade" placeholder="Gorpa">
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
        <input type="text" class="form-control" id="inputCEP">
      </div>
      <div class="col-md-2">
        <label for="inputNº" class="form-label">Nº</label>
        <input type="text" class="form-control" id="inputNº">
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">Check me out
          </label>
        </div>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary" >Sign in</button>
      </div>

    </form>

@endsection