
@extends('layout')
<title>Produtos</title>

@section('body')
<div class="container">
  <div class="pd-15">
    <br>
    <h1 style="color:white">Produtos</h1>
    <br>

    <a href="{{ route('product.create') }}" class="btn btn-primary">{{ __('Adicionar Produtos') }}</a>
    <br><br>     
   
    <div class="table-responsive ">

        <table class="table text-light ">

          <thead>
            <tr>
              <th>Produto (Título)</th>
              <th>Descrição</th>
              <th>Preço </th>
              <th>Disponibilidade</th>
              <th>Vizualizar</th>
              <th>Editar</th>
              <th>Remover</th>
            </tr>
          </thead>
          <tbody>

          @foreach ($products as $product)
            <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price_cents}}</td>
            <td>{{$product->is_avaliable}}</td>
            <td>
                <a href="{{ route('product.show') }}">
                </a>
              </td>

              <td>
                <a href="{{ route('product.edit') }}">
                </a> 
              </td>

              <td>
                <a href="#"> 
                </a>
              </td>
            </tr>
          @endforeach
</div>

@endsection