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
            <h2 class="text-light">Meu Cardápio</h2></>
          </div>
        </nav>
<br>

  <div class="container bg-dark text-white">

<h1>Login</h1>

  <form action="{{ route('login') }}" method="POST">
    @csrf
    <div class="mb-3 ">
      <label for="email " class="form-label"> Endereço de Email </label>
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
      @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror

      <div id="emailHelp" class="form-text text-white">Nunca iremos compartilhar seu email! :).</div>
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Senha</label>
      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
      @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror

    </div>
    
    <div class="row mb-0">
      <div class="col-md-8 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Login') }}
        </button>
        ou

        <a href="/register">Cadastrar</a>
      
    </div>
    </div>    
        <br>
    
</form>
</div>


    <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>