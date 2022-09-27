@extends('layout')
<title>Vizualizar Produtos</title>
@section('body')

<br><br>
<div class="container">
  <div>
    <h1 class=" text-light" >Vizualizar Produtos</h2>
  </div>
<br><br>

<div class="table-responsive ">
      <table class="table text-light">
        <thead>
          <tr>
            <th>Produto (Título)</th>
            <th>Descrição</th>
            <th>Preço </th>
            <th>Disponibilidade</th>
            <th>Imagem</th>
          </tr>
        </thead>
      
        <tbody>
          <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price_cents/100}}</td>
            <td>@if($product->is_available) Disponível @else Indisponível @endif</td>
            <td><img src="{{asset('/storage/'.$product->image_path)}}" width=90" height="50" alt=""></td>
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

