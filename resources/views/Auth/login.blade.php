@extends('layout.appprincipal')

@section('container')

<div class="container w-50 mt-2">
  <h1 class="text-center">{{__('Login')}}</h1>
  <form action="{{ route('loginStore') }}" method="post">
    @csrf
    @if (session('mensaje'))
    <p class="bg-danger text-white my-2 rounded text-center  ">
      {{ session('mensaje') }}
    </p>
    @endif

    <div class="form-group">
      <label class="form-label" for="username">Username</label>
      <input class="form-control" type="text" id="username" name="username" placeholder="Tu nombre de usuario" value="{{ old('username') }}">
      @error('username')
      <p class="bg-danger text-white my-2 rounded text-center ">{{ $message }}</p>
      @enderror
    </div>



    <div class="form-group">
      <label class="form-label" for="password">Password</label>
      <input class="form-control" type="password" id="password" name="password" placeholder="Tu password">

      @error('password')
      <p class="bg-danger text-white my-2 rounded text-center ">{{ $message }}</p>
      @enderror
    </div>

    <div class="my-2">
      <input type="checkbox" name="remember" id="remember">
      <label for="remember">Recordarme</label>
    </div>

    <input class="btn btn-primary my-2" type="submit" value="Iniciar sesión">
  </form>
</div>

@endsection