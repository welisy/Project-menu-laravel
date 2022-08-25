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

  <form method="POST" action="{{route('product.store')}}">
  @csrf
  <div class="d-flex flex-row gap-2">
    <div id="formu" class="w-100 mb-3">
      <label class="form-label"> <span> Nome </span></label>
        <input type="text" class="form-control" name="name">

      <label class="form-label"> <span> Descrição </span></label>
        <textarea type="text" class="form-control" name="decription"> </textarea>

      <label class="form-label"><span> Preço </span></label>
      <input type="number" step="0.01" id="price" class="form-control" name="price">

      <label class="form-label"><span> Disponibilidade </span></label>
        <select class="form-select" name="is_available">
        <option value="available">Disponível</option>
        <option value="unavailable">Indisponível</option>
        
    </div>
  </div>
  <button type="submit">Salvar</button>
  </form>

</div>

@endsection