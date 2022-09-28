@extends('layout')

<title>Meu Cardapio</title>

@section('body')

<div class="container">
  <h1>Cardapios</h1>
  <br>
  <div class="table-responsive ">
        <table class="table text-light ">

          <thead>
            <tr>
              <th>Nome</th>
              <th>Descrição</th>
              <th>Disponibilidade</th>
              <th>Imagem</th>
            </tr>
          </thead>
          <tbody>   

          @foreach ($menus as $menu)
            <tr>
              <td>{{$menu->name}}</td>
              <td>{{$menu->description}}</td>
              <td>@if($menu->is_active) Disponível @else Indisponível @endif </td>
              <td><img src="{{asset('/storage/'.$menu->image_path)}}" width=90" height="50" alt=""></td>
          @endforeach
      </div>

</div>
@endsection
