@extends('layout')
<title>Cardápios</title>
@section('body')
<div class="container mt-5">

    <!-- TABLE -->
  <div class="container">
    <div class="pd-15">
      <br><br>
      <h1 style="color:white">Cardapios</h1>
      <br><br>     
    
      <div class="table-responsive ">
        <table class="table text-light ">

          <thead>
            <tr>
              <th>Nome</th>
              <th>Descrição</th>
              <th>Disponibilidade</th>
              <th>Imagem</th>
              <th>QR Code</th>
              <th>Vizualizar</th>
              <th>Editar</th>
              <th>Remover</th>
            </tr>
          </thead>
          <tbody>   

          @foreach ($menus as $menu)
            <tr>
              <td>{{$menu->name}}</td>
              <td>{{$menu->description}}</td>
              <td>@if($menu->is_active) Disponível @else Indisponível @endif </td>
              <td><img src="{{asset('/storage/'.$menu->image_path)}}" width="90" height="50" alt=""></td>
              <td><a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> 
                    <h2><i class="bi bi-qr-code-scan"></i></h2>
                  </a></td>

                  
                  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">QR CODE do Cardápio</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          QR CODE
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"><i class="bi bi-box-arrow-left"></i>  Fechar</button>
                          <button type="button" class="btn btn-outline-primary"><i class="bi bi-share"></i> Compartilhar</button>
                        </div>
                      </div>
                    </div>
                  </div>
            
            <td>
              {{-- Vizualizar --}}
              <a class="btn btn-outline-primary" href="{{route('menu.show', $menu->id)}}">
                <i class="bi bi-eye"></i>
              </a>
            </td>
          
            <td>
              {{-- Editar --}}
              <a class="btn btn-outline-info" href="{{route('menu.edit', $menu->id)}}">
                <i class="bi bi-pencil-square"></i>
              </a>
            </td>
            
            <td>
              {{-- Remover --}}
              <form action="{{route('menu.destroy', $menu->id)}}" method="post">
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

        <a href="{{ route('menu.create') }}" class="btn btn-primary">{{ __('Adicionar Cardápio') }}</a>
      </div>
    </div>
  </div>    
</div>      
@endsection
