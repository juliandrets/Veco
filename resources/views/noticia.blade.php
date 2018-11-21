@extends('layout.default')

<?php $title = 'Veco'; ?>

@section('content')

    @include('layout.header-default')

    <ul id="banner-proyecto">
        @foreach($blog->pictures as $picture)
            <li>
                <div><a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
                <img src="/uploads/blog/{{ $picture->picture }}" alt="">
            </li>
        @endforeach
    </ul>

    <section id="noticia">

        <ul class="map">
            <li><a href="/">Inicio</a> \</li>
            <li><a href="/news">Noticias</a> \</li>
            <li><a href="#">{{ $blog->name }}</a></li>
        </ul>

        <a href="/news" class="volver"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
        <h2>__ {{ $blog->name }}</h2>

        <p>
            <strong>
                {{ $blog->description }}
            </strong>
            <br><br>
            {{ $blog->text }}
        </p>
    </section>

    <!-- Incluyo el footer y los script -->
    @include('layout.footer')
    @include('layout.scripts')

    <!-- Slick carrousel -->
    <script type="text/javascript" src="/plugins/slick/slick.min.js"></script>

    <script type="text/javascript">
        $('#banner-proyecto').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            centerMode: true,
            variableWidth: true
        });
    </script>

@endsection