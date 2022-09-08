
@extends('layout')
<title>Editar Usuarios
</title>
<style>
  .container {
    align-items: center;
    margin-top: 50px 
  }
  .title h4 {
    text-align: center;
    color: #fff;
    font-size: 50px;
    margin-bottom: 40px
  }

  .saveBtn {
    background: #7f9677;
    border-radius: 10px;
    width: 100px;
    height: 40px;
  }

  .saveBtn:hover {
    background: #2f8a08;
    transition-duration: 1s ;
  }

  #formu {
    color: #fff;
    display: grid;
  }

  #formu span {
    font-size: 20px 
  }

 
</style>

@section('body')

<div class="container">
  <div class="title">
    <h4>Editar Usuarios</h4>
  </div>

  <form method="POST" action="{{route('user.update', $user->id)}}" enctype="multipart/form-data">
  @method('PUT')
    @csrf
    <div class="d-flex flex-row gap-2">
      <div id="formu" class="w-100 mb-3">
        <label class="form-label"> <span> Nome </span></label>
          <input type="text" class="form-control" name="name" value="{{old('name', $user->name)}}">
        @error('name')
        <div class="text-danger">
          <strong>{{ $message }}</strong>
        </div>
        @enderror

        <br>  
        <label class="form-label"> <span> CPF </span></label>
          <input type="cpf" class="form-control" name="cpf" value="{{old('cpf', $user->cpf)}}">
          @error('cpf')
          <div class="text-danger">
            <strong>{{ $message }}</strong>
          </div>
          @enderror

        <br>
        <label class="form-label"><span> Telefone </span></label>
        <input type="number" name="phone" class="form-control" value="{{old('phone', $user->phone)}}">
        @error('phone')
        <div class="text-danger">
          <strong>{{ $message }}</strong>
        </div>
        @enderror

        <br>
        <label class="form-label"><span> Email </span></label>
        <input type="email" name="email" class="form-control" value="{{old('email', $user->email)}}">
        @error('email')
        <div class="text-danger">
          <strong>{{ $message }}</strong>
        </div>
        @enderror

        <br>
        <label class="form-label"><span> Endereço </span></label>
        <input type="text" name="address" class="form-control" value="{{old('address', $user->address)}}">
        @error('address')
        <div class="text-danger">
          <strong>{{ $message }}</strong>
        </div>
        @enderror

        <br>
        <label class="form-label"><span> Tipo </span></label>
        <select class="form-select" name="type" aria-label="Disponibilidade">
          <option value="1" @if ($user->is_available) select @endif>Funcionario</option>
          <option value="0" @if (!$user->is_available) select @endif>Gerente</option>
          @error('type')
        <div class="text-danger">
          {{ $message }}
        </div>
        @enderror 
        </select>

        <label for="image" class="form-label">Imagens</label>
        <input type="file" name="image" id="file" class="form-control" accept="image/jpeg">
        @error('image')
        <div class="text-danger">
          {{ $message }}
        </div>
        @enderror 

      </div>
    </div>
    <div>
      <div>
        <button class="btn btn-outline-success" type="submit" >Salvar</button>
      </div>
      <div class="d-flex">
        <a href="{{route('user.index', $user->id)}}" class="btn btn-outline-success" >Voltar</a>
      </div>
    </div>
</form>

</div>

@endsection