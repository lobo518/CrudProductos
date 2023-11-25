@extends('layout.appprincipal')

@section('container')

<div class="container w-50 mt-2">
  <h1 class="text-center">Registro</h1>
  <form action="{{route('registroStore')}}" method="post">
    @csrf
    <div class="form-group">
      <label class="form-label" for="name" class="">Nombre</label>
      <input class="form-control" type="text" id="name" name="name" placeholder="Tu nombre" value="{{ old('name') }}">

      @error('name')
      <p class="bg-danger text-white my-2 rounded text-center ">{{ $message }}</p>
      @enderror
    </div>

    <div class="form-group">
      <label class="form-label" for="username">Username</label>
      <input class="form-control" type="text" id="username" name="username" placeholder="Tu nombre de usuario" value="{{ old('username') }}">
      @error('username')
      <p class="bg-danger text-white my-2 rounded text-center ">{{ $message }}</p>
      @enderror
    </div>

    <div class="form-group">
      <label class="form-label" for="email">Email</label>
      <input class="form-control" type="email" id="email" name="email" placeholder="Tu correo" value="{{ old('email') }}">
      @error('email')
      <p class="bg-danger text-white my-2 rounded text-center ">{{ $message }}</p>
      @enderror
    </div>

    <div class="form-group">
      <label class="form-label" for="password">Password</label>
      <input class="form-control" type="password" id="password" name="password" placeholder="Tu password">
    </div>

    <div class="form-group">
      <label class="form-label" for="password_confirmation">Repetir Password</label>
      <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" placeholder="Repetir password">

      @error('password')
      <p class="bg-danger text-white my-2 rounded text-center ">{{ $message }}</p>
      @enderror
    </div>

    <input class="btn btn-primary my-2" type="submit" value="Crear cuenta">
  </form>
</div>

@endsection