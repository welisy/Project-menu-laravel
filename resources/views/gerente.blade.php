@extends('layout')
  <title>Gerente</title>
<style>
  hr {
    color: #00a491;
  }

  h1:hover {
    transform: scale(0.9);
    transition: all 0.5s;
    filter: drop-shadow(10px 9px 5px #000);
  }
</style>
@section('body')
<div class="container-fluid text-light">
  <div class="mt-5">
    <h1> Cardápios </h1>
    <hr>
    <h1> Funcionarios </h1>
    <hr>
    <h1> Produtos </h1>
    <hr>
    <h1> Pedidos </h1>
    <hr>
    <h1> Dados da Empresa </h1>
    <hr>
  </div>
</div>
@endsection