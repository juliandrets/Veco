@extends('layout.default')

<?php $title = $category->name.' - Veco'; ?>

@section('content')

    @include('layout.header-default')

    <section id="productos">
        <section id="cabecera">
            <ul class="breadcrumbs">
                <a href="/"><li>Inicio / </li></a>
                <a href="/productos"><li>Productos /</li></a>
                <li>{{$category->name}}</li>
            </ul>

            <h2>::: {{ $category->name }}</h2>
            <p>
                {{ $category->description }}
            </p>
        </section>

        <section class="content" id="products">
            <ul class="products">
                @foreach ($products as $product)
                <li>
                    <a href="#">
                        <figure>
                            <img src="/uploads/products/{{ $product->picture->picture }}">
                        </figure>
                        <section>
                            <h2>{{ $product->name }}</h2>
                        </section>
                    </a>
                </li>
                @endforeach
                {{ $products->links() }}
            </ul>
        </section>
    </section>

    <!-- Incluyo el footer y los script -->
    @include('layout.footer')
    @include('layout.scripts')


@endsection