@extends('admin.layouts.dashboard')

@section('content-header')

<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark">CATEGORIAS</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
        <li class="breadcrumb-item active">Categoría</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
    
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6">
        <h1 class="display-2 text-center text-primary">Listado</h1>
        <div class="card">
            <div class="card-header">
                <a href="{{ route('categorias.create') }}" class="btn btn-primary m-2 float-right">Crear</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                <thead>
                    <tr align="center">
                        <th style="width: 5%">N°</th>
                        <th>Descripción</th>
                        <th style="width: 15%">Habilitado</th>
                        <th colspan="2" style="width: 20%">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->nombre }}</td>
                        <td>{{ $categoria->mostrar }}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('categorias.edit',$categoria->id ) }}" title="Editar"><i class="fas fa-pencil-alt"></i> </a>
                        </td>
                        <td>
                            <form action="{{ route('categorias.edit',$categoria->id ) }}" method="POST" class="formEliminar">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" title="Eliminar"> <i class="fas fa-trash"></i> </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.col-md-6 -->
</div>

@endsection