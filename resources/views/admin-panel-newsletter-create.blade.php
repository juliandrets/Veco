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
                        <h1>Enviar Newsletter</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><a href="/adm/">Inicio</a></li>
                            <li class="active"><a href="/adm/newsletter/create">Enviar Newsletter</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        @if($event = app('request')->input('event'))
                            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                                <span class="badge badge-pill badge-success"><i class="fa fa-check"></i></span>
                                @if($event == 'create')
                                    El email fue creado exitosamente.
                                @elseif($event == 'update')
                                    El email fue editado exitosamente.
                                @elseif($event == 'delete')
                                    El email fue borrado exitosamente.
                                @endif
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>

                    <div class="col-md-12" style="padding-bottom: 20px">
                        <button type="button" id="b-projects" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Proyectos</button>
                        <button type="button" id="b-blogs" class="btn btn-secondary"><i class="fa fa-plus"></i> Noticias</button>
                        <button type="button" id="b-products" class="btn btn-secondary"><i class="fa fa-plus"></i> Productos</button>
                    </div>

                    <div class="col-md-12" id="projects">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Enviar Proyectos</strong>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($projects as $project)
                                        <tr>
                                            <td>{{ $project->id }}</td>
                                            <td>{{ $project->name }}</td>
                                            <td>
                                                <ul class="acciones-tabla" style="list-style: none">
                                                    <li>
                                                        <form action="adm/newsletter" method="POST">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="type" value="project">
                                                            <input type="hidden" name="id" value="{{ $project->id }}">
                                                            <button class="btn btn-primary" style="font-size: 12px"><i class="fa fa-send-o" aria-hidden="true"></i> Enviar como newsletter</button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $projects->links() }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" id="blogs">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Enviar Noticias</strong>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($blogs as $blog)
                                        <tr>
                                            <td>{{ $blog->id }}</td>
                                            <td>{{ $blog->name }}</td>
                                            <td>
                                                <ul class="acciones-tabla" style="list-style: none">
                                                    <li>
                                                        <form action="/adm/newsletter" method="POST">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="type" value="blog">
                                                            <input type="hidden" name="id" value="{{ $blog->id }}">
                                                            <button class="btn btn-primary" style="font-size: 12px"><i class="fa fa-send-o" aria-hidden="true"></i> Enviar como newsletter</button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $blogs->links() }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" id="products">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Enviar Productos</strong>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>
                                                <ul class="acciones-tabla" style="list-style: none">
                                                    <li>
                                                        <form action="/adm/newsletter" method="POST">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="type" value="product">
                                                            <input type="hidden" name="id" value="{{ $product->id }}">
                                                            <button class="btn btn-primary" style="font-size: 12px"><i class="fa fa-send-o" aria-hidden="true"></i> Enviar como newsletter</button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $products->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div>

    <!-- Right Panel -->

    <script src="{{ asset('admin/js/vendor/jquery-2.1.4.min.js') }}"></script>

    <script>
        $('#blogs').css('display', 'none');
        $('#products').css('display', 'none');

        $('#b-projects').click(function () {
            $('#projects').fadeIn(function () {});
            $('#blogs').css('display', 'none');
            $('#products').css('display', 'none');

            $('#b-projects').removeClass('btn-secondary');
            $('#b-projects').addClass('btn-primary');
            $('#b-blogs').removeClass('btn-primary');
            $('#b-blogs').addClass('btn-secondary');
            $('#b-products').removeClass('btn-primary');
            $('#b-products').addClass('btn-secondary');
        });

        $('#b-blogs').click(function () {
            $('#blogs').fadeIn(function () {});
            $('#projects').css('display', 'none');
            $('#products').css('display', 'none');

            $('#b-projects').removeClass('btn-primary');
            $('#b-projects').addClass('btn-secondary');
            $('#b-blogs').removeClass('btn-secondary');
            $('#b-blogs').addClass('btn-primary');
            $('#b-products').removeClass('btn-primary');
            $('#b-products').addClass('btn-secondary');
        });

        $('#b-products').click(function () {
            $('#products').fadeIn(function () {});
            $('#blogs').css('display', 'none');
            $('#projects').css('display', 'none');

            $('#b-projects').removeClass('btn-primary');
            $('#b-projects').addClass('btn-secondary');
            $('#b-blogs').removeClass('btn-primary');
            $('#b-blogs').addClass('btn-secondary');
            $('#b-products').removeClass('btn-secondary');
            $('#b-products').addClass('btn-primary');
        });
    </script>

    @include('layout/admin/validaciones')


@endsection