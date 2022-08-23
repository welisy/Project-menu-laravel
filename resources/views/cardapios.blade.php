@extends('layout')

@section('body')
<div class="container">
    <h1 style="color:white">Cardápios</h1> <br>
    <button type="button" class="btn btn-primary m-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Adicionar Cardápio
    </button>

    <!-- MODAL -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Criar novo Cardádio</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
  Nome do Cardádio
            <div class="form-floating mb-3">
    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
    <label for="floatingInput">Nome</label>
  </div>

  Adicionar Produtos
  <div class="col-md">
      <div class="form-floating">
        <select class="form-select" id="floatingSelectGrid">
          <option selected>none</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
        <label for="floatingSelectGrid">Adicionar</label>
      </div>
    </div>
  </div>

  <!-- TABLE MODAL-->

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Título</th>
        <th scope="col">Descrição</th>
        <th scope="col">Preço</th>
        <th scope="col">Disponibilidade</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"></th>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row"></th>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row"></th>
        <td colspan=""></td>
        <td></td>
      </tr>
    </tbody>
  </table>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary">Salvar alterações</button>
          </div>
        </div>
      </div>
    </div>

    <!-- TABLE -->
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
