@extends('layout')
  <title>Cardápio Principal</title>
@section('body')

  <br><br>

  <div class="container">
    <h2 class="text-light" >Cardápio Principal</h2>

    <form action="{{route('menu.public.show', $menu->id)}}" method="POST">
    @csrf
      <div class="mb-3 d-flex flex-row gap-3">
        <div>
          <label for="selectproducts">Adicionar Produtos</label>
          <select name="product" class="form-select"></select>
            @foreach ($addableProducts as $product)
              <option value="{{$product->id}}"> {{$product->name}}</option>
            @endforeach  
        </div>
        <div class="d-flex align-items-end">
          <button type="submit" class="btn btn-success rounded" title="Adicionar Produtos">
            <i class="bi bi-clipboard-plus"></i>
          </button>
        </div>
      </div>
    </form>

    <div class="table-responsive ">
      <table class="table text-light ">
        <thead>
          <tr>
            <th>Produto (Título)</th>
            <th>Descrição</th>
            <th>Preço </th>
            <th>Disponibilidade</th>  
          </tr>
        </thead>
      @foreach ($menu->products as $product)
        <tbody>
          <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->is_active}}</td>
            <td><img src="{{$product->img}}" alt=""></td>
          </tr>
      @endforeach
        </tbody>
    </table>
  </div>
</div>

<br> <br>

<br><br>

@endsection