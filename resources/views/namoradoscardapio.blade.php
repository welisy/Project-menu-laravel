@extends('layout')

<style>
    .container h1 {
      color: white;
      margin-top: 20px
    }

    .container h5 {
      color: white;
    }
    .addproduct p{
      color: white;
    }

    .btn btn-primary {
      margin-top: 20px;
    }
  </style>

  <title>Cardápio Dia dos Namorados</title>

@section('body')
  
<div class="container">

<h1>Editar Cardápio</h1>
  <br>

  <div class="d-flex justify-content-evenly">
    <div class="1">


      <div class="container">
        <h5><b>Nome:</b> Cardádio Dia dos Namorados</h5>
        <h5><b>Criado em:</b> 14/06/2022</h5>
        <h5><b>Disponibilidade:</b> </h5>

        <div class="form-check text-white">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            Disponível
          </label>
        </div>
        <div class="form-check text-white">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
          <label class="form-check-label" for="exampleRadios2">
            Indisponível
          </label>
        </div>
      </div>
    </div>
    <div class="addproduct">

      <div class="form-check form-switch form-check-reverse text-white">
        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
        <label class="form-check-label" for="flexSwitchCheckChecked"> Ativar/Desativar</label>
      </div>
      <br>
      <p>Adicionar Produtos</p>
      <select class="form-select form-select-reverse" aria-label="Default select example">
        <option selected> ....</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
    ...
  </div>

  <br>
    <div class="container">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Salvar mudanças
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Salvar mudanças</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Os produtos Adicionados serão salvos.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancelar</button>
              <button type="button" class="btn btn-primary">Salvar </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br><br>
    <h2 class="text-light">Cardápio Dia dos Namorados</h2>
    <div class="container">
      <div class="table-responsive ">
        <table class="table text-light ">
          <thead>
            <tr>
              <th>Produto (Título)</th>
              <th>Descrição</th>
              <th>Preço </th>
              <th>Disponibilidade</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Prato 1</td>
              <td>lalala</td>
              <td>R$ 12,00</td>
              <td>Disponível</td>
            </tr>
            <tr>
              <td>Prato 2</td>
              <td>lelele</td>
              <td>R$ 20,00</td>
              <td>Disponível</td>
            </tr>
            <tr>
              <td>Prato 3</td>
              <td>lilili</td>
              <td>R$ 50,00</td>
              <td>Disponível</td>
            </tr>
            <tr>
              <td>Prato 4</td>
              <td>lololo</td>
              <td>R$ 12,99</td>
              <td>Indisponível</td>
            </tr>
            <tr>
              <td>Prato 5</td>
              <td>lululu</td>
              <td>R$ 11,90</td>
              <td>Disponível</td>
            </tr>


          </tbody>
        </table>
      </div>
    </div>
    <br> <br>

    <h2 class="text-light">Bebidas</h2>
    <div class="container">
      <div class="table-responsive ">
        <table class="table text-light ">
          <thead>
            <tr>
              <th>Produto (Título)</th>
              <th>Descrição</th>
              <th>Preço </th>
              <th>Disponibilidade</th>
            </tr>
          </thead>en
          <tbody>
            <tr>
              <td>refri </td>
              <td>lalala</td>
              <td>R$ 12,00</td>
              <td>Disponível</td>
            </tr>
            <tr>
              <td>suco </td>
              <td>lelele</td>
              <td>R$ 20,00</td>
              <td>Disponível</td>
            </tr>
            <tr>
              <td>vitamina </td>
              <td>lilili</td>
              <td>R$ 50,00</td>
              <td>Disponível</td>
            </tr>
            <tr>
              <td>milkshake </td>
              <td>lololo</td>
              <td>R$ 12,99</td>
              <td>Indisponível</td>
            </tr>
            <tr>
              <td>drink </td>
              <td>lululu</td>
              <td>R$ 11,90</td>
              <td>Disponível</td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>

    <br> <br>
    <h2 class="text-light">Sobremesas </h2>
    <div class="container">
      <div class="table-responsive ">
        <table class="table text-light ">
          <thead>
            <tr>
              <th>Produto (Título)</th>
              <th>Descrição</th>
              <th>Preço </th>
              <th>Disponibilidade</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Prato 1</td>
              <td>lalala</td>
              <td>R$ 12,00</td>
              <td>Disponível</td>
            </tr>
            <tr>
              <td>Prato 2</td>
              <td>lelele</td>
              <td>R$ 20,00</td>
              <td>Disponível</td>
            </tr>
            <tr>
              <td>Prato 3</td>
              <td>lilili</td>
              <td>R$ 50,00</td>
              <td>Disponível</td>
            </tr>
            <tr>
              <td>Prato 4</td>
              <td>lololo</td>
              <td>R$ 12,99</td>
              <td>Indisponível</td>
            </tr>
            <tr>
              <td>Prato 5</td>
              <td>lululu</td>
              <td>R$ 11,90</td>
              <td>Disponível</td>
            </tr>

          </tbody>
        </table>
      </div>
  </div> <br> <br>
</div>

@endsection
