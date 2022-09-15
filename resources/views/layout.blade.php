<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Cardapios</title>

    <style>
    #hover-underline-animation {
      display: inline-block;
      position: relative;
      color: #fff;
    }

    #hover-underline-animation:after {
      content: '';
      position: absolute;
      width: 100%;
      transform: scaleX(0);
      height: 2px;
      bottom: 0;
      left: 0;
      background-color: #fff;
      transform-origin: bottom right;
      transition: transform 0.25s ease-out;
    }

    #hover-underline-animation:hover:after {
      transform: scaleX(1);
      transform-origin: bottom left;
    }

    </style>
</head>
<body class="bg-dark">

  <nav class="navbar navbar-expand-lg vh-10 vw-100 d-flex justify-content" style="background-color: #00a491">
    <div class="container-fluid">

      <a class="navbar-brand text-light" href="/gerente"><h2>Meu Cardápio</h2></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item text-white">
            <a class="nav-link active text-light" id="hover-underline-animation" aria-current="page" href="/gerente">
            <i class="bi bi-list"></i>
              Menu Principal</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-light" id="hover-underline-animation" href="{{ route('user.index') }}">
            <i class="bi bi-people"></i>
              Funcionários</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-light" id="hover-underline-animation" href="{{ route('menu.index') }}">
            <i class="bi bi-menu-button-wide"></i>
              Cardápios</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-light" id="hover-underline-animation" href="{{ route('product.index') }}">
            <i class="bi bi-shop"></i>
              Produtos</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-light" id="hover-underline-animation" href="{{ route('order.index') }}">
            <i class="bi bi-basket"></i>
              Pedidos</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-light" id="hover-underline-animation" href="/dadosempresa">
            <i class="bi bi-info-circle"></i>
              Dados da Empresa</a>
          </li>

          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end"  aria-labelledby="navbarDropdown">

              <form action="{{ route('logout')}}" method='post'>
                @csrf
                <button class="dropdown-item" type="submit"> Logout
                </button>

              </form>
            </div>
        </li>

        </ul>
      </div>
    </div>
  </nav>

  @yield('body')
    

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>