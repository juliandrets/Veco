@extends('layout.default')

<?php $title = 'Noticias - Veco'; ?>

@section('content')

    @include('layout.header-default')

    <section id="blog">
        <h2 class="title">:: Últimas noticias</h2>
        <ul>
            @foreach ($blogs as $blog)
                <li>
                    <figure>
                        <section class="hover"><a href="/news/{{ $blog->id }}"><i class="fa fa-plus" aria-hidden="true"></i></a></section>
                        <img src="/uploads/blog/tumb/{{ $blog->firstPicture->first()->picture }}" alt="">
                    </figure>
                    <h3>{{ $blog->name }}</h3>
                    <p>{{ $blog->description }}</p>
                    <a href="/news/{{ $blog->id }}">Descubre más</a>
                </li>
            @endforeach
        </ul>
    </section>

    <!-- Incluyo el footer y los script -->
    @include('layout.footer')
    @include('layout.scripts')

    <script>
        // default
        $(".b-op1").addClass("active");

        $(".b-op1").click(function () {
            $(".op1").fadeIn("fast", function() {});
            $(".op2").css("display", "none");
            $(".op3").css("display", "none");
            $(".op4").css("display", "none");
            $(".op5").css("display", "none");

            $(this).addClass("active");
            $(".b-op2").removeClass("active");
            $(".b-op3").removeClass("active");
            $(".b-op4").removeClass("active");
            $(".b-op5").removeClass("active");
        });
        $(".b-op2").click(function () {
            $(".op1").css("display", "none");
            $(".op2").fadeIn("fast", function() {});
            $(".op3").css("display", "none");
            $(".op4").css("display", "none");
            $(".op5").css("display", "none");

            $(this).addClass("active");
            $(".b-op1").removeClass("active");
            $(".b-op3").removeClass("active");
            $(".b-op4").removeClass("active");
            $(".b-op5").removeClass("active");
        });
        $(".b-op3").click(function () {
            $(".op1").css("display", "none");
            $(".op2").css("display", "none");
            $(".op3").fadeIn("fast", function() {});
            $(".op4").css("display", "none");
            $(".op5").css("display", "none");

            $(this).addClass("active");
            $(".b-op1").removeClass("active");
            $(".b-op2").removeClass("active");
            $(".b-op4").removeClass("active");
            $(".b-op5").removeClass("active");
        });
        $(".b-op4").click(function () {
            $(".op1").css("display", "none");
            $(".op2").css("display", "none");
            $(".op3").css("display", "none");
            $(".op4").fadeIn("fast", function() {});
            $(".op5").css("display", "none");

            $(this).addClass("active");
            $(".b-op1").removeClass("active");
            $(".b-op2").removeClass("active");
            $(".b-op3").removeClass("active");
            $(".b-op5").removeClass("active");
        });
        $(".b-op5").click(function () {
            $(".op1").css("display", "none");
            $(".op2").css("display", "none");
            $(".op3").css("display", "none");
            $(".op4").css("display", "none");
            $(".op5").fadeIn("fast", function() {});

            $(this).addClass("active");
            $(".b-op1").removeClass("active");
            $(".b-op2").removeClass("active");
            $(".b-op3").removeClass("active");
            $(".b-op4").removeClass("active");
        });
    </script>

    <!-- Slick carrousel -->
    <script type="text/javascript" src="/plugins/slick/slick.min.js"></script>

    <script type="text/javascript">
        $('#banner').slick({
            autoplay: true,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear',
        });
        $('.portfolio-ul').slick({
            autoplay: true,
            infinite: true,
            speed: 500
        });
        $('.next').click(function(){
            $(".portfolio-ul").slick('slickNext');
        });
    </script>

@endsection