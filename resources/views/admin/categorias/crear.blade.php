@extends('admin.layouts.dashboard')

@section('content-header')

<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark">NUEVA CATEGORIA</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('categorias.index') }}">Categoría</a></li>
        <li class="breadcrumb-item active">Nuevo</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
    
@endsection

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title"></h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="{{ route('categorias.store') }}" method="post">
      @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
      </div>
      <div class="form-group">
        <label for="mostrar" class="form-label">Custom Select</label>
        <select class="custom-select">
          <option selected value=false>No visible</option>
          <option value=true>Visible</option>
        </select>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-success">Guardar</button>
    </div>
  </form>
</div>
@endsection