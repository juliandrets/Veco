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
                        <h1>Nuevo Producto</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><a href="/adm/">Inicio</a></li>
                            <li class="active"><a href="/adm/products">Productos</a></li>
                            <li class="active"><a href="/adm/products/create">Nuevo Producto</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12" style="padding-bottom: 20px">
                        <a href="/adm/products-categories/"><button type="button" class="btn btn-primary"><i class="fa fa-angle-left"></i>&nbsp; Volver</button></a>
                    </div>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Editar Producto</strong>
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

                            <form action="/adm/products/{{ $product->id }}/update" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="card-body card-block">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control-label" type="checkbox" @if($product->fixed) checked @endif  name="fixed" style="width:25px !important;" />
                                            <label class=" form-control-label">Fijar producto</label>
                                        </div>
                                        <small class="form-text text-muted">El producto aparecera primero en la lista de productos. (A medida)</small>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Imagenes Preview</label>

                                        @if (count($product->preview))
                                            <ul class="img-producto-form">
                                                @if (count($product->preview))
                                                    <li>
                                                        <img src="/uploads/products/preview/{{ $product->preview }}" alt="">
                                                    </li>
                                                @endif
                                                @if (count($product->preview2))
                                                    <li>
                                                        <img src="/uploads/products/preview/{{ $product->preview2 }}" alt="">
                                                    </li>
                                                @endif
                                            </ul>
                                        @endif

                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <div>
                                                    <input type="file" name="preview" accept="image/png"  @if (!$product->preview) {{ "required" }} @endif>
                                                </div>
                                                <small class="form-text text-muted">Imagen preview1</small>
                                            </div>
                                            <div class="col-sm-6">
                                                <div>
                                                    <input type="file" name="preview2" accept="image/png"  @if (!$product->preview2) {{ "required" }} @endif>
                                                </div>
                                                <small class="form-text text-muted">Imagen preview2</small>
                                            </div>
                                        </div>
                                        <br><br>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Imagenes</label>

                                        @if (count($product->pictures))
                                            <ul class="img-producto-form">
                                                @foreach ($product->pictures as $picture)
                                                    <li>
                                                        <figure>
                                                            <img src="/uploads/products/tumb/{{ $picture->picture }}" alt="">
                                                            <a href="/adm/pictures/{{ $picture->id }}/delete"><div class="bb"><i class="fa fa-trash"></i></div></a>
                                                        </figure>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif

                                        <div class="input-group">
                                            <input id="input-b1" type="file" class="file" name="pictures[]" multiple data-theme="fas" @if (!$product->pictures) {{ "required" }} @endif>
                                        </div>
                                        <small class="form-text text-muted">Preferentemente formato JPG. (se muestra en la pagina principal)</small>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Nombre</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-pencil"></i></div>
                                            <input class="form-control" type="text" name="name" placeholder="Nombre del proyecto *" value="{{ $product->name }}" required>
                                        </div>
                                        <small class="form-text text-muted">Nombre de la categoria</small>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Categoria</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-pencil"></i></div>
                                            <select name="category_id" class="form-control">
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}" @if($product->category->id == $category->id) selected @endif>{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <small class="form-text text-muted">Nombre de la categoria</small>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Ficha técnica <span style="color:red">{{ $product->file ? "(Hay una ficha cargada)" : null }}</span></label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-file"></i></div>
                                            <input type="file" name="file" accept="application/pdf">
                                        </div>
                                        <small class="form-text text-muted">Nombre de la categoria</small>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Descripcion</label>
                                        <div class="input-group">
                                            <textarea class="form-control" id="description" name="description">{{ $product->description }}</textarea>
                                        </div>
                                        <small class="form-text text-muted">Texto detallado de la categoria (se muestra en la pagina principal)</small>
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
        CKEDITOR.replace('description');
        CKEDITOR.config.width = '100%';
    </script>


    <script>
        // with plugin options
        $("#input-b1").fileinput({
            theme: 'fas',
            showUpload: false,
            language: 'es',
            allowedFileExtensions: ["jpg", "gif", "png", "txt"],
            maxFilePreviewSize: 10240,
            browseOnZoneClick: true,

        });
    </script>

    @include('layout/admin/validaciones')


@endsection

