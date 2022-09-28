@extends('layout')

  <style>
    .container h1 {
      color: white;
      margin-top: 20px
    }

    .container h5 {
      color: white;
    }
    .addproduct p{
      color: white;
    }

    .btn btn-primary {
      margin-top: 20px;
    }

   
  </style>

  <title>Editar cardápio</title>

@section('body') 

<div class="container">
  <h1>Editar Cardápios</h1>
  <br>
  <div class="d-flex justify-content-evenly">
    <div class="1">  
        <h5><b>Nome:</b> {{$menu->name}} </h5>
        <h5><b>Descrição:</b> {{$menu->description}} </h5>
        <h5><b>Disponibilidade:</b> {{$menu->is_active ? 'Disponível' : 'Indisponível'}}</h5>
      
    </div>

    <br><br>

    <div class="addproduct">
      <br>
      <h5>Adicionar Produtos</h5>
      <form action="{{route('menu.product.store', $menu->id)}}" method="post">
        @csrf
        <div class="mb-3 d-flex flex-row gap-3">
          <div>
            <label for="selectproducts">Adicionar Produto</label>
            <select class="form-select form-select-reverse" aria-label="Default select example" name="product_id" id="selectproducts">
              @foreach($addableProducts as $product)
                <option value="{{$product->id}}">{{$product->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="d-flex alig-tems-end">
            <button type="submit" class="btn btn-outline-success rounded" title="Adicionar novo prato">
              <i class="bi bi-plus-square"></i>
            </button>
          </div>
        </div>
      </form>

    </div>
  </div>

  <br><br>
    <div class="table-responsive ">
      <table class="table text-light">
        <h2 class="text-light">Tabela dos produtos</h2>
        <thead>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Preço</th>
          <th>Disponibilidade</th>
          <th>Excluir</th>
        </thead>
        <tbody>
          @foreach($menu->products as $product)
            <tr>
              <td><a target="_blank" href="{{route('product.show', $product-> id)}}">{{$product->name}}</a></td>
              <td>{{$product->description}}</td>
              <td>{{$product->price_cents/100}}</td>
              <td>{{$product->is_available ? 'Disponível' : 'Indisponível'}}</td>
              <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <form action="{{route('menu.product.destroy', [$menu->id, $product->id])}}" method="post">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-outline-danger" title="Remover">
                          <i class="bi bi-trash"></i>
                      </button>
                    </form>
                </div>
                </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

  <br><br>

  <h2 class="text-light">Cardápio Principal</h2>

  <form method="POST" action="{{route('menu.update', $menu->id)}}" enctype="multipart/form-data">
  @method('PUT')
    @csrf
    <div class="d-flex flex-row gap-2 text-light">
      <div id="formu" class="w-100 mb-3">
        <label class="form-label"> <span> Nome </span></label>
          <input type="text" class="form-control" name="name" value="{{old('name', $menu->name)}}">
        @error('name')
        <div class="text-danger">
          <strong>{{ $message }}</strong>
        </div>
        @enderror

        <br>  
        <label class="form-label"> <span> Descrição </span></label>
          <input type="text" class="form-control" name="description" value="{{old('description', $menu->description)}}">
          @error('description')
          <div class="text-danger">
            <strong>{{ $message }}</strong>
          </div>
          @enderror

        <br>
        <label class="form-label"><span> Disponibilidade </span></label>
        <select class="form-select" name="is_available" aria-label="Disponibilidade">
          <option value="1" @if ($menu->is_available) select @endif>Disponível</option>
          <option value="0" @if (!$menu->is_available) select @endif>Indisponível</option>
        </select>

      </div>
    </div>
    <div>
      <button class="btn btn-outline-success" type="submit" >Salvar</button>
    </div>
    <div class="d-flex">
      <a href="{{route('menu.show', $menu->id)}}" class="btn btn-outline-success" >Voltar</a>
    </div>
</form>
  
</div>

@endsection
