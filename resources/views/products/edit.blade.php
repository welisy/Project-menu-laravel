@extends('layout')
<title>Edit</title>

@section('body')

<form method="POST" action="{{route('product.update', $product->id)}}">
@csrf
@method('PUT')
  <div class="d-flex flex-row gap-2">
    <div class="w-100 mb-3">
      <label class="form-label">Nome</label>
        <input type="text" name="name" value="{{$product->name}}">

      <label class="form-label">Email</label>
        <input type="email" name="email" value="{{$product->email}}">

      <label class="form-label">Senha</label>
        <input type="password" name="password" value="">
    </div>
    <button type="submit">Salvar</button>
  </div>
</form>

@endsection