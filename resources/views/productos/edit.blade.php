@extends('layout.app')
@section('container')
<h1 class="text-center">Editar producto</h1>

<div class="container w-50">
  <form action="{{route('productosUpdate',$producto->id)}}" method="post">
    @csrf @method('PATCH')
    <div class="form-group">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" name="nombre" class="form-control" id="nombre" value="{{old('nombre',$producto->nombre)}}">
      @error('nombre')
      <small style="color: red">{{$message}}</small>
      @enderror
    </div>

    <div class="form-group">
      <label for="descripcion" class="form-label">Descripción</label>
      <input type="text" name="descripcion" class="form-control" id="descripcion" value="{{old('descripcion',$producto->descripcion)}}">
      @error('descripcion')
      <small style="color: red">{{$message}}</small>
      @enderror
    </div>

    <div class="form-group">
      <label for="precio" class="form-label">Precio</label>
      <input type="text" name="precio" class="form-control" id="precio" value="{{old('precio',$producto->precio)}}">
      @error('precio')
      <small style="color: red">{{$message}}</small>
      @enderror
    </div>


    <div class="form-group mt-2">

      <button type="submit" class="btn btn-primary left ">Guardar</button>
      <a class="btn btn-danger" href="{{route('productosIndex')}}">Cancelar</a>

    </div>
  </form>


</div>

@endsection