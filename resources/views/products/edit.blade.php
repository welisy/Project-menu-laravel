
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

  <form method="POST" action="{{route('product.edit', $product->id)}}">
  @csrf
  <div class="d-flex flex-row gap-2">
    <div id="formu" class="w-100 mb-3">
      <label class="form-label"> <span> Nome </span></label>
        <input type="text" class="form-control" name="name" value="{{$product->name}}">

      <label class="form-label"> <span> Descrição </span></label>
        <input type="text" class="form-control" name="decription" value="{{$product->description}}">

      <label class="form-label"><span> Preço </span></label>
      <input type="text" class="form-control" value="{{$product->preco}}">
    </div>
  </div>
  <div class="">
    <button class="saveBtn" type="submit">Salvar</button>
  </div>
</form>

</div>

@endsection