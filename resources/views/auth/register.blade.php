<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <title>Cardapios</title>
  </head>
  <body class="bg-dark">

    <nav class="navbar navbar-expand-lg vh-10 vw-100 d-flex justify-content" style="background-color: #00a491">
      <div class="container-fluid">

        <a class="navbar-brand text-light" href="/gerente"><h2>Meu Cardápio</h2></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      </div>
    </nav>

<!-- ----------------------------------------------- -->

    <div class="container text-light">
        <br><br>
      <h1>Cadastro de Estabelecimento</h1>

      <form class="row g-3" action="{{route('register')}}" method="POST">
        @csrf

        <div class="col-12">
          <label for="inputCompanyName" class="form-label">Razão Social</label>
          <input type="text" class="form-control" name="companyName" id="companyName ">
          @error('companyName')
            <div class="text-danger">
              {{ $message }}
            </div> 
          @enderror
        </div>
        
        <div class="col-12">
          <label for="inputTradingName" class="form-label">Nome Fantasia</label>
          <input type="text" class="form-control" name="tradingName" id="tradingName ">
          @error('tradingName')
            <div class="text-danger">
              {{ $message }}
            </div> 
          @enderror
        </div>

        <div class="col-md-6">
          <label for="inputCNPJ" class="form-label">CNPJ</label>
          <input type="text" class="form-control" name="cnpj" id="inputCNPJ">
          @error('cnpj')
            <div class="text-danger">
              {{ $message }}
            </div> 
          @enderror
        </div>

        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" id="inputEmail4">
          @error('email')
            <div class="text-danger">
              {{ $message }}
            </div> 
          @enderror
        </div>

        <div class="col-md-6">
          <label for="inputPhone" class="form-label">Telefone</label>
          <input type="text" class="form-control" name="phone" id="inputPhone">
          @error('phone')
            <div class="text-danger">
              {{ $message }}
            </div> 
          @enderror    
        </div>

        <div class="col-12">
          <label for="inputAddress" class="form-label">Endereço </label>
          <input type="text" class="form-control" id="inputEndereço" name="addressCompany" >
          @error('addressCompany')
            <div class="text-danger">
              {{ $message }}
            </div> 
          @enderror
        </div>

        <!-- <div class="col-md-6">
          <label for="inputCidade" class="form-label">Cidade</label>
          <input type="text" class="form-control" id="inputCidade" name="city">
          @error('city')
            <div class="text-danger">
              {{ $message }}
            </div> 
          @enderror
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
        </div> 
        
        <div class="col-md-2">
            <label for="inputCEP" class="form-label">CEP</label>
            <input type="text" class="form-control" id="inputCEP" name="cep" > 
            @error('cep')
            <div class="text-danger">
              {{ $message }}
            </div> 
            @enderror
        </div>

        <div class="col-md-2">
          <label for="inputNº" class="form-label">Nº</label>
          <input type="number" class="form-control" id="inputNº" name="number">
          @error('number')
            <div class="text-danger">
              {{ $message }}
            </div> 
          @enderror
        </div> -->

        </div>

        <br>

        <div class="container text-light">
            <br><br>
          <h1>Cadastro de Usuario</h1>
            <div class="col-12">
              <label for="inputNome" class="form-label">Nome</label>
              <input type="text" class="form-control" name="name" id="Nome ">
              @error('name')
                <div class="text-danger">
                  {{ $message }}
                </div> 
                @enderror
            </div>

            <div class="col-md-6">
              <label for="inputCNPJ" class="form-label">CPF</label>
              <input type="text" class="form-control" name="cpf" id="inputCPF">
              @error('cpf')
                  <div class="text-danger">
                    {{ $message }}
                  </div> 
                  @enderror
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="text" class="form-control" name="email" id="inputEmail">
              @error('email')
                <div class="text-danger">
                  {{ $message }}
                </div> 
                @enderror
            </div>

            <div class="col-md-6">
              <label for="inputPhone" class="form-label">Phone</label>
              <input type="text" class="form-control" name="phone" id="inputPhone">
              @error('name')
                <div class="text-danger">
                  {{ $message }}
                </div> 
                @enderror    
            </div>

            <div class="col-md-4">
              <label for="inputType" class="form-label">Tipo</label>
              <select id="inputType" class="form-select" name="type">
                <option value='employee' >Funcionario</option>
                <option value='manager'>Gerente</option>
              </select>
              @error('type')
                <div class="text-danger">
                  {{ $message }}
                </div> 
              @enderror
            </div> 

            <div class="col-md-6">
              <label for="inputSenha4" class="form-label">Senha</label>
              <input type="password" class="form-control" name="password" id="inputPassword">
              @error('password')
                <div class="text-danger">
                  {{ $message }}
                </div> 
                @enderror
            </div>


            <div class="col-12">
              <label for="inputAddress" class="form-label">Endereço </label>
              <input type="text" class="form-control" id="inputAddress" name="addressUser">
              @error('addressUser')
                <div class="text-danger">
                  {{ $message }}
                </div> 
                @enderror
            </div>

            <!-- <div class="col-md-6">
              <label for="inputCidade" class="form-label">Cidade</label>
              <input type="text" class="form-control" id="inputCidade" name="city">
              @error('city')
                <div class="text-danger">
                  {{ $message }}
                </div> 
                @enderror
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
            </div> 
            
            <div class="col-md-2">
                <label for="inputCEP" class="form-label">CEP</label>
                <input type="text" class="form-control" id="inputCEP" name="cep" > 
                @error('cep')
                <div class="text-danger">
                  {{ $message }}
                </div> 
                @enderror
            </div>

            <div class="col-md-2">
              <label for="inputNº" class="form-label">Nº</label>
              <input type="number" class="form-control" id="inputNº" name="number">
              @error('number')
                <div class="text-danger">
                  {{ $message }}
                </div> 
                @enderror
            </div> -->

            <br>
            <div class="col-12">
              <button class="btn btn-outline-primary" type="submit" >Cadastrar</button>
            </div>
      </form>
      <br><br><br>
    </div>
  </body>
</html>
