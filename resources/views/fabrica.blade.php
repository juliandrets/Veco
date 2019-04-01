@extends('layout.default')

<?php $title = 'Nosotros - Veco'; ?>

@section('content')

    @include('layout.header-default')

    <section id="about">
        <section id="cabecera">
            <h2 class="title">::: Fabrica</h2>
        </section>
    </section>

    <section id="banner-proyecto" style="margin: 50px 0px">
        <section class="arrow l"><i class="fa fa-angle-left" aria-hidden="true"></i></section>
        <section class="arrow r"><i class="fa fa-angle-right" aria-hidden="true"></i></section>

        <ul class="ban">
            <li>
                <div><a class="example-image-link" href="/img/fabrica/001_fabrica.png" data-lightbox="example-set"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
                <img src="/img/fabrica/001_fabrica.png" alt="">
            </li>
            <li>
                <div><a class="example-image-link" href="/img/fabrica/002_fabrica.jpg" data-lightbox="example-set"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
                <img src="/img/fabrica/002_fabrica.jpg" alt="">
            </li>
            <li>
                <div><a class="example-image-link" href="/img/fabrica/003_fabrica.jpg" data-lightbox="example-set"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
                <img src="/img/fabrica/003_fabrica.jpg" alt="">
            </li>
            <li>
                <div><a class="example-image-link" href="/img/fabrica/004_fabrica.jpg" data-lightbox="example-set"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
                <img src="/img/fabrica/004_fabrica.jpg" alt="">
            </li>
            <li>
                <div><a class="example-image-link" href="/img/fabrica/005_fabrica.jpg" data-lightbox="example-set"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
                <img src="/img/fabrica/005_fabrica.jpg" alt="">
            </li>
            <li>
                <div><a class="example-image-link" href="/img/fabrica/006_fabrica.jpg" data-lightbox="example-set"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
                <img src="/img/fabrica/006_fabrica.jpg" alt="">
            </li>
            <li>
                <div><a class="example-image-link" href="/img/fabrica/007_fabrica.bmp" data-lightbox="example-set"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
                <img src="/img/fabrica/007_fabrica.bmp" alt="">
            </li>
            <li>
                <div><a class="example-image-link" href="/img/fabrica/008_fabrica.jpg" data-lightbox="example-set"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
                <img src="/img/fabrica/008_fabrica.jpg" alt="">
            </li>
        </ul>
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