<!-- Planilla default header y css -->
@extends('layout.admin.admin')

<!-- Nombre del titulo de la pagina -->
<?php $title = 'Administration Panel'; ?>

@section('content')

    <!-- Header -->
    @include('layout.admin.aside')

    <div id="right-panel" class="right-panel">

        @include('layout.admin.header-admin')

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Nuevo proyecto</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><a href="/adm/">Inicio</a></li>
                            <li class="active"><a href="/adm/projects">Proyectos</a></li>
                            <li class="active"><a href="/adm/projects/create">Nuevo Proyecto</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12" style="padding-bottom: 20px">
                        <a href="/adm/projects/"><button type="button" class="btn btn-primary"><i class="fa fa-angle-left"></i>&nbsp; Volver</button></a>
                    </div>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Nuevo proyecto</strong>
                            </div>

                            <br>
                            <div class="col-sm-12">
                                @if($event = app('request')->input('event'))
                                    <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                                        <span class="badge badge-pill badge-danger"><i class="fa fa-close"></i></span>
                                            La imagen de portada es obligatoria.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                            </div>

                            <form action="/adm/projects" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="card-body card-block">
                                    <div class="form-group">
                                        <label class=" form-control-label">Imagenes</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-image"></i></div>
                                            <input class="form-control" type="file" name="pictures[]" accept="image/*" multiple style="font-size: 12px" required>
                                        </div>
                                        <small class="form-text text-muted">Preferentemente formato JPG.</small>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Nombre</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-pencil"></i></div>
                                            <input class="form-control" type="text" name="name" placeholder="Nombre del proyecto *" required>
                                        </div>
                                        <small class="form-text text-muted">Nombre del proyecto</small>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Ubicación</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-external-link-square"></i></div>
                                            <input class="form-control" type="text" name="place" placeholder="Ubicacion del proyecto" required>
                                        </div>
                                        <small class="form-text text-muted">Ej: New York</small>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Mini descripcion</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-pencil"></i></div>
                                            <textarea class="form-control" name="description" required></textarea>
                                        </div>
                                        <small class="form-text text-muted">Es la mini descripcion despues del titulo</small>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Texto</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-pencil"></i></div>
                                            <textarea class="form-control" name="text" required></textarea>
                                        </div>
                                        <small class="form-text text-muted">Texto detallado del proyecto</small>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Cliente</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-external-link-square"></i></div>
                                            <input class="form-control" type="text" name="client" placeholder="Cliente" required>
                                        </div>
                                        <small class="form-text text-muted">Cliente del proyecto</small>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Link de maps</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-external-link-square"></i></div>
                                            <input class="form-control" type="text" name="maps" placeholder="Link de google maps" required>
                                        </div>
                                        <small class="form-text text-muted">Copiar solo la siguiente parte: ej: </small>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Arquitectos</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-external-link-square"></i></div>
                                            <input class="form-control" type="text" name="arquitectes" placeholder="Nombre de grupo de arquitectos" required>
                                        </div>
                                        <small class="form-text text-muted">Arquitectos de la obra</small>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Fecha de realización</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-external-link-square"></i></div>
                                            <input class="form-control" type="text" name="date" required>
                                        </div>
                                        <small class="form-text text-muted">EJ: 2015-2016</small>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Producción</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-external-link-square"></i></div>
                                            <input class="form-control" type="text" name="production" placeholder="Produccion" required>
                                        </div>
                                        <small class="form-text text-muted">Producción</small>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>&nbsp; Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div>

    <!-- Right Panel -->

    <script src="{{ asset('admin/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins.js') }}"></script>
    <script src="{{ asset('admin/js/main.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#bootstrap-data-table-export').DataTable();
        } );
    </script>

    @include('layout/admin/validaciones')


@endsection

