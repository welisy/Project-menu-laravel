@extends('layout')
  <title>Pedidos</title>

  @section('body')
<div class="container">

  <br>
      <h1 style="color:white">Pedidos</h1>
  
  <!-- Editar nomes -->
      <table class="table bg-white m-2">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Data de criação</th>
            <th scope="col">Ativo</th>
            <th scope="col">Ações</th>
  
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>
              <a href="principalcardapio.html">Cardápio Principal </a>
            </td>
            <td>12/05/22 </td>
            <td>
              <div class="form-check form-switch  text-white ">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheck">
                <label class="form-check-label" for="flexSwitchCheck"></label>
              </div>
            </td>
            <td>
  
                <a href="editcardapio.html">
                <button type="button" name="button" >
                <ion-icon name="brush-outline"></ion-icon>
              </button> </a>
            </td>
            <td> <button type="button" name="button" href="Delete">
                <ion-icon name="trash"></ion-icon>
              </button>
            </td>
  
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>
              <a href="diadosnamoradoscardapio.html">Cardápio Dia dos Namorados</a>
            </td>
            <td>14/05/22 </td>
            <td>
              <div class="form-check form-switch  text-white ">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheck">
                <label class="form-check-label" for="flexSwitchCheck"></label>
              </div>
            </td>
            <td>
              <button type="button" name="button" href="Editcardapio">
                <ion-icon name="brush-outline"></ion-icon>
              </button>
            </td>
            <td>
              <button type="button" name="button" href="Delete">
              <ion-icon name="trash"></ion-icon> </button>
            </td>
          </tr>
  
        </tbody>
      </table>
</div>
@endsection