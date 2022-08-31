@extends('layout')
<title>Adicionar Produtos
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
    <h4>Adicionar Produtos</h4>
  </div>

  <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
  @csrf
  <div class="d-flex flex-row gap-2">
    <div id="formu" class="w-100 mb-3">
      <label class="form-label"> <span> Nome </span></label>
        <input type="text" class="form-control" name="name" value="{{old('name')}}">
        @error('name')
        <div class="text-danger">
          {{ $message }}
        </div> 
        @enderror

        <br>
      <label class="form-label"> <span> Descrição </span></label>
        <textarea type="text" class="form-control" name="description" value="{{old('description')}}"></textarea>
        @error('description')
        <div class="text-danger">
          {{ $message }}
        </div> 
        @enderror

        <br>
      <label class="form-label"><span> Preço </span></label>
      <input type="number" step="0.01" id="price" class="form-control" name="price" value="{{old('price')}}">
      @error('price')
      <div class="text-danger">
        {{ $message }}
      </div> 
      @enderror

      <br>
      <label class="form-label"><span> Disponibilidade </span></label>
        <select class="form-select" name="is_available">
          <option value="available">Disponível</option>
          <option value="unavailable">Indisponível</option>
        </select>
        
        <br>
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
      <a href="{{route('product.index')}}" class="btn btn-outline-success" >Voltar</a>
    </div>

    </div>

  </form>

</div>

@endsection