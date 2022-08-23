@extends('layout')
<title>Adicionar Produtos
</title>

@section('body')

<form method="POST" action="{{route('product.update', $product->id)}}">
@csrf
  <div class="d-flex flex-row gap-2">
    <div class="w-100 mb-3">
      <label class="form-label">Nome</label>
        <input type="text" name="name">

      <label class="form-label">Email</label>
        <input type="email" name="email">

      <label class="form-label">Senha</label>
        <input type="password" name="password">
    </div>
    <button type="submit">Salvar</button>
  </div>
</form>

@endsection