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
                    <a href="/producto/{{ $product->id }}">
                        <figure>
                            <img class="preview" src="/uploads/products/preview/{{ $product->preview }}">
                            <img class="preview2" src="/uploads/products/preview/{{ $product->preview2 }}">
                        </figure>
                        <section>
                            <h2>{{ $product->name }}</h2>
                        </section>
                    </a>
                </li>
                @endforeach
            </ul>
        </section>
        {{ $products->links() }}
    </section>


    <!-- Incluyo el footer y los script -->
    @include('layout.footer')
    @include('layout.scripts')

    <!-- Slick carrousel -->
    <script type="text/javascript" src="/plugins/slick/slick.min.js"></script>

@endsection