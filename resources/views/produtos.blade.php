
@extends('layout')
<title>Produtos</title>

@section('body')

<div class="pd-15">
  <br>
  <h1 style="color:white">Produtos</h1>
  <br>

  <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel"> Adicionar Produtos</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form>
            <fieldset>
                <div>
                    <label> Nome </label>
                    <input type="text" name="nome" id="nome">
                </div>

                <div>
                  <label> Preço </label>
                  <input type="number" name="preço" id="preço"> </div>


            </fieldset>
          </form>

        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Salvar alterações</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel2">Confirme</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Salvar alterações?
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Sim</button>
        </div>
      </div>
    </div>
  </div>
  <a class="btn btn-outline-primary justify-content-md-end" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Adicionar Produtos</a>

  <h2 class="text-light"></h2>
  <div class="container">

  <div class="table-responsive ">

      <table class="table text-light ">

        <thead>
          <tr>
            <th>Produto (Título)</th>
            <th>Descrição</th>
            <th>Preço </th>
            <th>Disponibilidade</th>
            <th>Vizualizar</th>
            <th>Editar</th>
            <th>Remover</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>produt 1</td>
            <td>lalala</td>
            <td>R$ 12,00</td>
            <td>Disponível</td>
            <td>
                <a href="#">
                <button type="button" name="button" >
                <ion-icon name="eye-outline"></ion-icon>
              </button> </a>
            </td>

            <td>
                <a href="#">
                <button type="button" name="button" >
                <ion-icon name="brush-outline"></ion-icon>
              </button> </a>
            </td>

            <td>
                <a href="#">
                <button type="button" name="button" >
                <ion-icon name="trash-outline"></ion-icon>
              </button> </a>
            </td>
          </tr>
          <tr>
            <td>produt 2</td>
            <td>lelele</td>
            <td>R$ 20,00</td>
            <td>Disponível</td>
            <td>
                <a href="#">
                <button type="button" name="button" >
                <ion-icon name="eye-outline"></ion-icon>
              </button> </a>
            </td>

            <td>
                <a href="#">
                <button type="button" name="button" >
                <ion-icon name="brush-outline"></ion-icon>
              </button> </a>
            </td>

            <td>
                <a href="#">
                <button type="button" name="button" >
                <ion-icon name="trash-outline"></ion-icon>
              </button> </a>
            </td>
          </tr>
          <tr>
            <td>produt 3</td>
            <td>lilili</td>
            <td>R$ 50,00</td>
            <td>Disponível</td>
            <td>
                <a href="#">
                <button type="button" name="button" >
                <ion-icon name="eye-outline"></ion-icon>
              </button> </a>
            </td>

            <td>
                <a href="#">
                <button type="button" name="button" >
                <ion-icon name="brush-outline"></ion-icon>
              </button> </a>
            </td>

            <td>
                <a href="#">
                <button type="button" name="button" >
                <ion-icon name="trash-outline"></ion-icon>
              </button> </a>
            </td>
          </tr>
          <tr>
            <td>produt 4</td>
            <td>lololo</td>
            <td>R$ 12,99</td>
            <td>Indisponível</td>
            <td>
                <a href="#">
                <button type="button" name="button" >
                <ion-icon name="eye-outline"></ion-icon>
              </button> </a>
            </td>

            <td>
                <a href="#">
                <button type="button" name="button" >
                <ion-icon name="brush-outline"></ion-icon>
              </button> </a>
            </td>

            <td>
                <a href="#">
                <button type="button" name="button" >
                <ion-icon name="trash-outline"></ion-icon>
              </button> </a>
            </td>
          </tr>
          <tr>
            <td>produt 5</td>
            <td>lululu</td>
            <td>R$ 11,90</td>
            <td>Disponível</td>
            <td>
                <a href="#">
                <button type="button" name="button" >
                <ion-icon name="eye-outline"></ion-icon>
              </button> </a>
            </td>

            <td>
                <a href="#">
                <button type="button" name="button" >
                <ion-icon name="brush-outline"></ion-icon>
              </button> </a>
            </td>

            <td>
                <a href="#">
                <button type="button" name="button" >
                <ion-icon name="trash-outline"></ion-icon>
              </button> </a>
            </td>
          </tr>
</div>

@endsection