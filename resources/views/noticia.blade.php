@extends('layout.default')

<?php $title = $blog->name . '- Veco'; ?>

@section('content')

    @include('layout.header-default')

    <section id="banner-proyecto">
        <section class="arrow l"><i class="fa fa-angle-left" aria-hidden="true"></i></section>
        <section class="arrow r"><i class="fa fa-angle-right" aria-hidden="true"></i></section>

        <ul class="ban">
            @foreach($blog->pictures as $picture)
                <li>
                    <div><a class="example-image-link" href="/uploads/blog/{{ $picture->picture }}" data-lightbox="example-set"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
                    <img src="/uploads/blog/{{ $picture->picture }}" alt="">
                </li>
            @endforeach
        </ul>
    </section>

    <section id="noticia">

        <ul class="map">
            <li><a href="/">Inicio</a> \</li>
            <li><a href="/noticias">Noticias</a> \</li>
            <li><a href="#">{{ $blog->name }}</a></li>
        </ul>

        <a href="/news" class="volver"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
        <h2>__ {{ $blog->name }}</h2>

        <p>
            <strong>
                {{ $blog->description }}
            </strong>
            <br><br>
            {!! $blog->text !!}
        </p>
    </section>

    <!-- Incluyo el footer y los script -->
    @include('layout.footer')
    @include('layout.scripts')

    <!-- Slick carrousel -->
    <script type="text/javascript" src="/plugins/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

    <script type="text/javascript">
        $('.ban').slick({
            infinite: true,
            slidesToShow: 1,
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