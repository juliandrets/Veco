@extends('layout.default')

<?php $title = 'Veco'; ?>

@section('content')

    @include('layout.header-default')
    
    <ul id="banner">
        @foreach($projects as $project)
        <li>
            <figure>
                <img src="/uploads/projects/{{ $project->firstPicture->first()->picture }}" alt="">
            </figure>
            <section class="content">
                <section>
                    <h2>{{ $project->name }}</h2>
                    <p>{{ $project->description }}</p>
                    <i class="fa fa-plus icon" aria-hidden="true"></i>
                </section>
            </section>
        </li>
        @endforeach
    </ul>

    <section id="productos-index">
        <section class="content">
            <h2>::: Productos</h2>
            <section>
                <ol class="opciones">
                    @foreach($productCategories as $category)
                        <li class="b-op{{ $loop->iteration }}">{{ $category->name }}</li>
                    @endforeach
                </ol>
                <ul class="opcionContent">
                    @foreach($productCategories as $category)
                        <?php $count = 1; ?>
                        <li class="op{{ $loop->iteration }} }}">
                            <article>
                                <p>{{ $category->description }}</p>
                            </article>
                        </li>
                        <?php $count++; ?>
                    @endforeach
                </ul>
            </section>
        </section>
        <aside>
            <ul>
                @foreach($productCategories as $category)
                    <li class="op{{ $loop->iteration }}"><img src="/uploads/productsCategories/{{ $category->picture->picture }}" alt=""></li>
                @endforeach
            </ul>
        </aside>
    </section>

    <section id="portfolio-index">
        <h2>::: Nuestros Trabajos</h2>
        <ul class="portfolio-ul">
            @foreach ($projects as $project)
                <li>
                    <a href="/project/{{ $project->id }}">
                        <figure>
                            <img src="/uploads/projects/{{$project->firstPicture->first()->picture}}" alt="">
                        </figure>
                        <article>
                            <div>
                                <h2>{{ $project->name }}</h2>
                                <h3>{{ $project->place }}</h3>
                                <p>{{ $project->description }}</p>
                            </div>
                        </article>
                    </a>
                    <div class="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </div>
                </li>
            @endforeach
        </ul>
    </section>

    <section id="blog-index">
        <h2>::: Últimas noticias</h2>
        <ul>
            @foreach ($blogs as $blog)
            <li>
                <figure>
                    <section class="hover"><a href="/noticia/{{ $blog->id }}"><i class="fa fa-plus" aria-hidden="true"></i></a></section>
                    <img src="/uploads/blog/tumb/{{ $blog->firstPicture->first()->picture }}" alt="">
                </figure>
                <h3>{{ $blog->name }}</h3>
                <p>{{ $blog->description }}</p>
                <a href="/noticia/{{ $blog->id }}">Descubre más</a>
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