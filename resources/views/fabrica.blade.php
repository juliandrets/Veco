@extends('layout.default')

<?php $title = 'Fabrica - Veco'; ?>

@section('content')

    @include('layout.header-default')

    <section id="about">
        <section id="cabecera">
            <h2 class="title">::: Fabrica</h2>
            <p>
                Nuestra Planta Industrial emplazada en sobre 600 m2 en General Rodríguez y un Plantel de Maquinaria Premiun nos permite adaptarnos y fabricar para cada Obra lo que el cliente requiera.
            </p>
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

    <section id="about">
        <section class="map">
            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Caminito 950 | Gral. Rodríguez</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.814977114614!2d-58.90578398502831!3d-34.60883988045824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bc91cc8145a8df%3A0xa236c074e449aef9!2sCaminito%2C+General+Rodriguez%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1552679097485" height="350" style="width: 100%; padding-bottom: 30px" frameborder="0" style="border:0" allowfullscreen></iframe>
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