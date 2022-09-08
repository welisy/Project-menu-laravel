@extends('layout')
  <title>Gerente</title>

@section('body')
<div class="container-fluid">

  <table class="table">
    <thead class="table-li">
      ...
    </thead>
    <tbody>


      <h1 class="text-light"> Menu Principal </h1>
      <hr style="color:white">
    </tbody>
  </table>

  <div class="d-flex justify-content-evenly" >

    <div class="card ms-5" style="width: 19rem;">
      <img src="" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title text-black">Cardápio Principal</h5>
      <p class="card-text text-black">Cardápio Criado em 12/05/22 </p>
      <a href="" class="btn btn-dark">Editar cardápio</a>
    </div>
  </div>

  <br><br>

  <div class="card" style="width: 19rem;">
  <img src="" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-black">Cardápio Dia dos Namorados</h5>
    <p class="card-text text-black">Cardápio Criado em 14/05/22 </p>
    <a href="" class="btn btn-dark">Editar cardápio</a>
  </div>
  </div>
  </div>
</div>
@endsection