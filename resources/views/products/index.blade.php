
@extends('layout')
<title>Produtos</title>

@section('body')
<div class="container">
  <div class="pd-15">
    <br><br>
    <h1 style="color:white">Produtos</h1>
    <br><br>     

    <div class="table-responsive ">

        <table class="table text-light ">

          <thead>
            <tr>
              <th>Produto (Título)</th>
              <th>Descrição</th>
              <th>Preço </th>
              <th>Disponibilidade</th>
              <th>Imagem</th>
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
              <td>R${{$product->price_cents}}</td>
              <td>@if($product->is_available) Disponível @else Indisponível @endif </td>
              <td><img src="{{asset('/storage/'.$product->image_path)}}" width=90" height="50" alt=""></td>
            
            <td>
              {{-- Vizualizar --}}
              <a class="btn btn-outline-primary" href="{{route('product.show', $product->id)}}">
                <i class="bi bi-eye"></i>
              </a>
            </td>
          
            <td>
              {{-- Editar --}}
              <a class="btn btn-outline-info" href="{{route('product.edit', $product->id)}}">
                <i class="bi bi-pencil-square"></i>
              </a>
            </td>
            
            <td>
              {{-- Remover --}}
              <form action="{{route('product.destroy', $product->id)}}" method="post">
                @method('delete')
                @csrf
                <button class="btn btn-outline-danger">
                  <i class="bi bi-trash"></i>
                </button>
              </form>
            </td>


            </tr>
          @endforeach
          
          </tbody>
        </table>   

        <a href="{{ route('product.create') }}" class="btn btn-primary">{{ __('Adicionar Produtos') }}</a>
    </div>
  </div>
</div>
@endsection