<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css">

    <script src="arquivo.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>cadastro.HTML</title>
  </head>
  <body class="bg-dark vh-100 vw-100">

    <nav class="navbar navbar-expand-lg vh-10 vw-100 d-flex justify-content" style="background-color: #00a491">
      <div class="container-fluid">
        <a class="navbar-brand text-light" href="Gerente.html"><h2>Meu Cardápio</h2></a>
      </div>
    </nav>

  <div class="container bg-dark text-white">
    <br><br>
<h1>Cadastro de Usuarios</h1>

  <form class="row g-3" action="{{route('user.store')}}" method="POST">
    @csrf
    <div class="col-12">
      <label for="inputNome" class="form-label">Nome</label>
        <input type="text" class="form-control" name="name" id="Nome " placeholder="jão">
    </div>
    <div class="col-md-6">
      <label for="inputCNPJ" class="form-label">CPF</label>
        <input type="text" class="form-control" name="CPF" id="inputCNPJ">
    </div>
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="inputEmail4">
    </div>
    <div class="col-md-6">
      <label for="inputPhone" class="form-label">Phone</label>
        <input type="phone" class="form-control" name="phone" id="inputPhone">
    </div>
    <div class="col-md-4">
      <label for="inputEstado" class="form-label">Tipo</label>
      <select id="inputEstado" class="form-select">
        <option selected>Escolha...</option>
        <option>Funcionario</option>
        <option>Gerente</option>
      </select>
    </div> 
    <div class="col-md-6">
      <label for="inputSenha4" class="form-label">Senha</label>
      <input type="password" class="form-control" name="password" id="inputSenha4">
    </div>
     {{-- 
    <div class="col-12">
      <label for="inputEndereço" class="form-label">Endereço </label>
      <input type="text" class="form-control" id="inputEndereço" placeholder="Apartamento, studio, Andar">
    </div>
    <div class="col-md-6">
      <label for="inputCidade" class="form-label">Cidade</label>
      <input type="text" class="form-control" id="inputCidade" placeholder="Gorpa">
    </div>
    <div class="col-md-4">
      <label for="inputEstado" class="form-label">Estado</label>
      <select id="inputEstado" class="form-select">
        <option selected>Escolha...</option>
        <option>São Paulo</option>
        <option>Paraná</option>
        <option>Rio de Janeiro</option>
        <option>Santa Catarina</option>
      </select>
    </div> --}}
      {{-- <div class="col-md-2">
        <label for="inputCEP" class="form-label">CEP</label>
        <input type="text" class="form-control" id="inputCEP">
      </div>
      <div class="col-md-2">
        <label for="inputNº" class="form-label">Nº</label>
        <input type="text" class="form-control" id="inputNº">
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">Check me out
          </label>
        </div>
      </div> --}}
      <div class="col-12">
        <button type="submit" class="btn btn-primary" >Cadastrar</button>
      ou
      <a href= "/login" > Login  </a>
    <div class="col-12">
    <br><br>
      </div>

  </form>

    <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
  </script>
  </body>
</html>
