<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css">

    <script src="arquivo.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login.HTML</title>

  </head>
  <body class="bg-dark vh-100 vw-100">

        <nav class="navbar navbar-expand-lg vh-10 vw-100 d-flex justify-content" style="background-color: #00a491">
          <div class="container-fluid">
            <a class="navbar-brand text-light" href="Gerente.html"><h2>Meu Cardápio</h2></a>
          </div>
        </nav>
<br>

  <div class="container bg-dark text-white">

<h1>Login</h1>

    <form>
  <div class="mb-3 ">
    <label for="exampleInputEmail1 " class="form-label"> Endereço de Email </label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text text-white">Nunca iremos compartilhar seu email! :).</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Mantenha me Conectado</label>
  </div>
    <button type="submit" class="btn btn-primary">Entrar </button>
  <div class="col-12">
  </div>
<br>
    ou
    <a href= "{{ route('/cadastro') }} ">{{ __('Cadastro') }}</a>
  <div class="col-12">
  </div>

</form>
</div>


    <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
