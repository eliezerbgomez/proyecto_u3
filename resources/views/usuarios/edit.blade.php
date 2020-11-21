@extends('layout.layout')

@section('titulo')
CRUD USUARIO EDITAR
@endsection

@section('menu') 
<li class="nav-item">
            <a class="nav-link active" href="categorias">
              <span data-feather="home"></span>
              Categoria <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="usuarios">
              <span data-feather="file"></span>
              Usuario
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="productos">
              <span data-feather="shopping-cart"></span>
              Productos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Cerrar Sesión
            </a>
          </li>
@endsection



@section('contenido')
<form action="{{ url('/usuarios/'.$usuario->id) }}" method="post" enctype="multipart/form-data">  
    @csrf
    @method('PATCH')
    
    <label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre" id="Nombre" value="{{ $usuario->Nombre }}" class="form-control">
    <br>
    <label for="ApellidoPaterno">{{'Apellido Paterno'}}</label>
    <input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{ $usuario->ApellidoPaterno }}"class="form-control">
    <br>
    <label for="ApellidoMaterno">{{'Apellido Materno'}}</label>
    <input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{ $usuario->ApellidoMaterno }}"class="form-control">
    <br>
    <label for="Correo">{{'Correo'}}</label>
    <input type="email" name="Correo" id="Correo" value="{{ $usuario->Correo }}"class="form-control">
    <br>
    <label for="password">{​​{​​'Password'}​​}​​</label>
    <input type="text" name="password" id="password" value="{{ $usuario->Password }}" class="form-control"> 
    <br>
    <label for="Foto">{{'Foto'}}</label>
    <br>
    <td><img src="{{ asset('storage').'/'.$usuario->Foto}}" alt="" width="200"></td>
    <br>
    <input type="file" name="Foto" id="Foto" value="">
    <br>
    <br>
    <input type="submit" value="Modificar" class="btn btn-success">
    <a href="{{ url('usuarios') }}" class="btn btn-primary">Regresar</a>
</form>
@endsection
