@extends('plantilla.app')
@section('contenido')
<div class="app-content">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header"><h3 class="card-title">Usuarios</h3></div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div>
                            <form action="" method="get">
                                <div class="input-group">
                                    <input name="texto" type="text" class="form-control" value="" placeholder="Ingrese texto a buscar">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-search"></i>
                                            Buscar</button>
                                        <a href="{{ route('usuarios.create') }}" class="btn btn-primary">Nuevo</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="table-responsive mt-3">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 100px">Opciones</th>
                                    <th style="width: 20px">ID</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>activo</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @if(count($registros)<=0)
                                        <tr>
                                            <td colspan="4">No hay registros que coincidan con la busqueda</td>
                                        </tr>
                                        @else 
                                        @foreach($registros as $registro)
                                        <tr class="align-middle">
                                            <td>
                                                <a href="#" class="btn btn-warning btn-sm"> <i class="bi bi-pencil-fill"></i> </a>&nbsp;
                                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-eliminar-01">
                                                    <i class="bi bi-trash-fill"></i>
                                                </button>
                                            </td>
                                            <td>{{ $registro->id }}</td>
                                            <td>{{ $registro->name }}</td>
                                            <td>{{ $registro->email }}</td>
                                            <td>{{ $registro->activo }}</td>
                                        </tr>
                                        @endforeach
                                        @include('usuario.delete')
                                    @endif
                                
                                
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                       {{ $registros->links() }}
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
@endsection
@push('scripts')
    <script>
        document.getElementById('mnuSeguridad').classList.add('menu-open');
        document.getElementById('itemUsuario').classList.add('active');
    </script>
@endpush
