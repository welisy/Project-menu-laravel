@extends('layout')
  <title>Gerente</title>
<style>
  hr {
    color: #00a491;
  }

  h1:hover {
    transform: scale(1.1);
    transition: all 0.4s ease-in-out;
    filter: drop-shadow(10px 9px 5px #000);
    text-decoration: none;
  }

  .hover-underline-animation {
    display: inline-block;
    position: relative;
    color: #fff;
    text-decoration: none;
  }

  .hover-underline-animation:after {
    content: '';
    position: absolute;
    width: 100%;
    transform: scaleX(0);
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: #00a491;
    transform-origin: bottom right;
    transition: transform 0.25s ease-out;
  }

  .hover-underline-animation:hover:after {
    transform: scaleX(1);
    transform-origin: bottom left;
    text-decoration: none!important;
}

  h1 a {
    text-decoration: none!important;
    color: #fff;
  }

</style>
@section('body')
<div class="container">
  <div class="container-fluid text-light">
    <div class="mt-5">
      <h1 class="hover-underline-animation"> 
        <a href="{{ route('menu.index') }}">Cardápios</a> 
      <i class="bi bi-menu-button-wide"></i>
      </h1> 
      
      <hr>
      <h1 class="hover-underline-animation"> Funcionarios 
      <i class="bi bi-people"></i>
      </h1>
  
      <hr>
      <h1 class="hover-underline-animation"> Produtos 
        <i class="bi bi-shop"></i>
      </h1>
  
      <hr>
      <h1 class="hover-underline-animation"> Pedidos 
        <i class="bi bi-basket"></i>
      </h1>
  
      <hr>
      <h1 class="hover-underline-animation"> Dados da Empresa 
        <i class="bi bi-info-circle"></i>
      </h1>
      <hr>
    </div>
  </div>
</div>
@endsection