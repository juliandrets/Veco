@extends('layout.default')

<?php $title = 'Productos - Veco'; ?>

@section('content')

    @include('layout.header-default')

    <section id="productos">
        <section id="cabecera">
            <h2>::: Productos</h2>
            <p>
                Por favor seleccione que categoria de productos desea ver.
            </p>
        </section>

        <section class="content">
            <ul class="categories">
                @foreach ($categories as $category)
                    <li>
                        <a href="/productos/{{ $category->name }}">
                        <figure>
                            <img src="/uploads/productsCategories/{{ $category->picture->picture }}">
                        </figure>
                        <section>
                            <h2>{{ $category->name }}</h2>
                        </section>
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>
    </section>

    <!-- Incluyo el footer y los script -->
    @include('layout.footer')
    @include('layout.scripts')


@endsection