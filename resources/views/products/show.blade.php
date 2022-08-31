@extends('layout')

@section('body')

<br><br>
<div class="container">
  <div>
    <h1 class="text-center text-light" >Vizualizar Produtos</h2>
  </div>
<br><br>

  <ul class="list-group list-group-flush">  
    <li class="list-group-item">{{$product->name}}</li>   
    <li class="list-group-item">{{$product->description}}</li>   
    <li class="list-group-item">R${{$product->price_cents/100}}</li>   
    <li class="list-group-item">@if($product->is_available) Disponível @else Indisponível @endif </li> 
  </ul>
  
  <br><br>
  
  <div class="d-flex">
    <a href="{{route('product.edit', $product->id)}}" class="btn btn-outline-success" >Editar</a>
  </div>
  <div class="d-flex">
    <a href="{{route('product.index', $product->id)}}" class="btn btn-outline-success" >Voltar</a>
  </div>
</div>


@endsection

