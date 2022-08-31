
@extends('layout')
<title>Editar Produtos
</title>
<style>
  .container {
    align-items: center;
    margin-top: 50px 
  }
  .title h4 {
    text-align: center;
    color: #fff;
    font-size: 50px;
    margin-bottom: 40px
  }

  .saveBtn {
    background: #7f9677;
    border-radius: 10px;
    width: 100px;
    height: 40px;
  }

  .saveBtn:hover {
    background: #2f8a08;
    transition-duration: 1s ;
  }

  #formu {
    color: #fff;
    display: grid;
  }

  #formu span {
    font-size: 20px 
  }

 
</style>

@section('body')

<div class="container">
  <div class="title">
    <h4>Editar Produtos</h4>
  </div>

  <form method="POST" action="{{route('product.update', $product->id)}}" enctype="multipart/form-data">
  @method('PUT')
    @csrf
    <div class="d-flex flex-row gap-2">
      <div id="formu" class="w-100 mb-3">
        <label class="form-label"> <span> Nome </span></label>
          <input type="text" class="form-control" name="name" value="{{old('name', $product->name)}}">
        @error('name')
        <div class="text-danger">
          <strong>{{ $message }}</strong>
        </div>
        @enderror

        <br>  
        <label class="form-label"> <span> Descrição </span></label>
          <input type="text" class="form-control" name="description" value="{{old('description', $product->description)}}">
          @error('description')
          <div class="text-danger">
            <strong>{{ $message }}</strong>
          </div>
          @enderror

        <br>
        <label class="form-label"><span> Preço </span></label>
        <input type="number" name="price" class="form-control" value="{{old('price', $product->price_cents/100)}}">
        @error('price')
        <div class="text-danger">
          <strong>{{ $message }}</strong>
        </div>
        @enderror

        <br>
        <label class="form-label"><span> Disponibilidade </span></label>
        <select class="form-select" name="is_available" aria-label="Disponibilidade">
          <option value="1" @if ($product->is_available) select @endif>Disponível</option>
          <option value="0" @if (!$product->is_available) select @endif>Indisponível</option>
        </select>

        <label for="image" class="form-label">Imagens</label>
        <input type="file" name="image" id="file" class="form-control" accept="image/jpeg">
        @error('image')
        <div class="text-danger">
          {{ $message }}
        </div>
        @enderror

      </div>
    </div>
    <div>
      <button class="btn btn-outline-success" type="submit" >Salvar</button>
    </div>
    <div class="d-flex">
      <a href="{{route('product.show', $product->id)}}" class="btn btn-outline-success" >Voltar</a>
    </div>
</form>

</div>

@endsection