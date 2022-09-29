
@extends('layout')
<title>Pedidos</title>

@section('body')
<div class="container">
  <div class="pd-15">
    <br><br>
    <h1 style="color:white">Pedidos</h1>
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

          @foreach ($orders as $order)
            <tr>
              <td>{{$order->name}}</td>
              <td>{{$order->description}}</td>
              <td>R${{$order->price_cents}}</td>
              <td>@if($order->is_available) Disponível @else Indisponível @endif </td>
              <td><img src="{{$order->image_path}}" alt=""></td>
            
              <td>
              {{-- Vizualizar --}}
              <a class="btn btn-outline-primary" href="{{route('order.show', $menu->id)}}">
                <i class="bi bi-eye"></i>
              </a>
            </td>
          
            <td>
              {{-- Editar --}}
              <a class="btn btn-outline-info" href="{{route('order.edit', $menu->id)}}">
                <i class="bi bi-pencil-square"></i>
              </a>
            </td>
            
            <td>
              {{-- Remover --}}
              <form action="{{route('order.destroy', $menu->id)}}" method="post">
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

        <a href="{{ route('order.create') }}" class="btn btn-primary">{{ __('Adicionar Pedidos') }}</a>
    </div>
  </div>
</div>
@endsection