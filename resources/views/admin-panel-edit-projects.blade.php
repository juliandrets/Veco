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
                        <h1>Modificar proyecto</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><a href="/adm/">Inicio</a></li>
                            <li class="active"><a href="/adm/projects">Proyectos</a></li>
                            <li class="active"><a href="#">Modificar Proyecto</a></li>
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
                                <strong class="card-title">Modificar proyecto</strong>
                            </div>

                            <br>
                            <div class="col-sm-12">
                                @if($errors->any())
                                    <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                                        <span class="badge badge-pill badge-danger"><i class="fa fa-close"></i></span>
                                        La imagen de portada es obligatoria.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                            </div>

                            <form action="/adm/projects/{{ $project->id }}/update" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="card-body card-block">
                                    <div class="form-group">
                                        <label class=" form-control-label">Imagenes</label>

                                        @if (count($project->pictures))
                                            <ul class="p">
                                                @foreach ($project->pictures as $picture)
                                                    <li>
                                                        <img src="/uploads/projects/tumb/{{ $picture->picture }}" alt="">
                                                        <a href="/adm/pictures/{{ $picture->id }}/delete"><div class="bb"><i class="fa fa-trash"></i></div></a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif

                                        <div class="input-group">
                                            <input id="input-b1" type="file" class="file" name="pictures[]" multiple data-theme="fas" @if (!count($project->pictures)) {{ "required" }} @endif>
                                        </div>
                                        <small class="form-text text-muted">Preferentemente formato JPG.</small>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Nombre</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-pencil"></i></div>
                                            <input class="form-control" type="text" name="name" placeholder="Nombre del proyecto *" value="{{ $project->name }}" required>
                                        </div>
                                        <small class="form-text text-muted">Nombre del proyecto</small>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Ubicación</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-external-link-square"></i></div>
                                            <input class="form-control" type="text" name="place" placeholder="Ubicacion del proyecto" value="{{ $project->place }}" required>
                                        </div>
                                        <small class="form-text text-muted">Ej: New York</small>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Mini descripcion</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-pencil"></i></div>
                                            <textarea class="form-control" name="description" required>{{ $project->description }}</textarea>
                                        </div>
                                        <small class="form-text text-muted">Es la mini descripcion despues del titulo</small>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Texto</label>
                                        <div class="input-group">
                                            <textarea class="form-control" name="text" id="text" required>{{ $project->text }}</textarea>
                                        </div>
                                        <small class="form-text text-muted">Texto detallado del proyecto</small>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Cliente</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-external-link-square"></i></div>
                                            <input class="form-control" type="text" name="client" placeholder="Cliente" value="{{ $project->client }}" required>
                                        </div>
                                        <small class="form-text text-muted">Cliente del proyecto</small>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Direccion Principal (para el mapa)</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-external-link-square"></i></div>
                                            <input class="form-control" type="text" name="maps" placeholder="Direccion principal" value="{{ $project->maps }}" required>
                                        </div>
                                        <small class="form-text text-muted">Copiar solo la siguiente parte: ej: </small>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Direcciones</label>
                                        <div class="input-group">
                                            <textarea class="form-control" id="adress" name="adress" placeholder="Direcciones" style="width: 100%; height: 150px" required>{{ $project->adress }}</textarea>
                                        </div>
                                        <small class="form-text text-muted">Copiar solo la siguiente parte: ej:</small>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Arquitectos</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-external-link-square"></i></div>
                                            <input class="form-control" type="text" name="arquitectes" placeholder="Nombre de grupo de arquitectos" value="{{ $project->arquitectes }}">
                                        </div>
                                        <small class="form-text text-muted">Arquitectos de la obra</small>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Fecha de realización</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-external-link-square"></i></div>
                                            <input class="form-control" type="text" name="date" value="{{ $project->date }}" required>
                                        </div>
                                        <small class="form-text text-muted">EJ: 2015-2016</small>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Producción</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-external-link-square"></i></div>
                                            <input class="form-control" type="text" name="production" value="{{ $project->production }}" placeholder="Produccion" required>
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

    <link href="{{ asset('admin/js/upload/css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/js/upload/themes/explorer-fas/theme.css') }}" media="all" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('admin/js/upload/js/plugins/sortable.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/upload/js/fileinput.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/upload/js/locales/fr.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/upload/js/locales/es.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/upload/themes/fas/theme.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/upload/themes/explorer-fas/theme.js') }}" type="text/javascript"></script>


    <script src="{{ asset('plugins/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'adress' );
        CKEDITOR.replace( 'text' );
        CKEDITOR.config.width = '100%';
    </script>


    <script>
        // with plugin options
        $("#input-b1").fileinput({
            theme: 'fas',
            showUpload: false,
            language: 'es',
            maxFileCount: 10,
            allowedFileExtensions: ["jpg", "gif", "png", "txt"],
            maxFilePreviewSize: 22500,
            browseOnZoneClick: true,

        });
    </script>

    @include('layout/admin/validaciones')


@endsection



