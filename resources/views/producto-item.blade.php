@extends('layout.default')

<?php $title = $product->name . '- Veco'; ?>

@section('content')

    @include('layout.header-default')

    <section id="banner-proyecto">
        <section class="arrow l"><i class="fa fa-angle-left" aria-hidden="true"></i></section>
        <section class="arrow r"><i class="fa fa-angle-right" aria-hidden="true"></i></section>

        <ul class="ban">
            @foreach($product->pictures as $picture)
            <li>
                <div><a class="example-image-link" href="/uploads/products/{{ $picture->picture }}" data-lightbox="example-set"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
                <img src="/uploads/products/{{ $picture->picture }}" alt="">
            </li>
            @endforeach
        </ul>
    </section>

    <section id="proyecto">
        <ul class="map">
            <li><a href="/">Inicio</a> \</li>
            <li><a href="/productos">Productos</a> \</li>
            <li><a href="/productos/{{ $product->category->name }}">{{ $product->category->name }}</a> \</li>
            <li><a href="#">{{ $product->name }}</a></li>
        </ul>

        <section class="content" style="width: 100% !important">
            <h2 class="title">__ {{ $product->name }}</h2>

            <p>
                {!! $product->description !!}
            </p>

            @if ($product->file)
                <section class="file">
                    <a href="/uploads/products/files/{{ $product->file }}" target="_blank"><h2><i class="fa fa-file-archive-o" aria-hidden="true"></i> Descarga la ficha técnica</h2></a>
                </section>
            @endif
        </section>
    </section>

    <!-- Incluyo el footer y los script -->
    @include('layout.footer')
    @include('layout.scripts')

    <!-- Slick carrousel -->
    <script type="text/javascript" src="/plugins/slick/slick.min.js"></script>

    <script type="text/javascript">
        $('.ban').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            centerMode: true,
            variableWidth: true
        });
        $('.l').click(function(){
            $(".ban").slick('slickPrev');
        });
        $('.r').click(function(){
            $(".ban").slick('slickNext');
        });
    </script>



@endsection