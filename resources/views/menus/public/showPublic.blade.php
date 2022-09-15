@extends('layout')

<title>Meu Cardapio</title>

@section('body')

<div class="container">
  <h1>Cardapios</h1>
  <br>

  <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$product->name}}</h5>
    <p class="card-text">{{$product->name}}</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{$product->name}}</li>
    <li class="list-group-item">{{$product->name}}</li>
    <li class="list-group-item">{{$product->name}}</li>
  </ul>
  <div class="card-body">
  </div>
</div>

</div>
@endsection
