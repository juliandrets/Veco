@extends('layout.default')

<?php $title = $project->name . '- Veco'; ?>

@section('content')

    @include('layout.header-default')

    <section id="banner-proyecto">
        <section class="arrow l"><i class="fa fa-angle-left" aria-hidden="true"></i></section>
        <section class="arrow r"><i class="fa fa-angle-right" aria-hidden="true"></i></section>

        <ul class="ban">
            @foreach($project->pictures as $picture)
            <li>
                <div><a class="gallery" href="/uploads/projects/{{ $picture->picture }}"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
                <img src="/uploads/projects/{{ $picture->picture }}" alt="">
            </li>
            @endforeach
        </ul>
    </section>

    <section id="proyecto">

        <ul class="map">
            <li><a href="/">Inicio</a> \</li>
            <li><a href="/proyectos">Proyectos</a> \</li>
            <li><a href="#">{{ $project->name }}</a></li>
        </ul>

        <section class="content">
            <h2 class="title">__ {{ $project->name }}</h2>

            <p>
                <strong>
                    {{ $project->description }}
                </strong>
                <br><br>
                {!! $project->text !!}
            </p>
        </section>
        <aside>
            <iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q={{ $project->maps }}&output=embed"></iframe>
            <ul>
                <li>
                    <h4>Lugar</h4>
                    <h5>{{ $project->place }}</h5>
                </li>
                @if ($project->adress)
                    <li>
                        <h4>Direcciones</h4>
                        <h5 class="adress">{!! $project->adress !!}</h5>
                    </li>
                @endif
                <li>
                    <h4>Cliente</h4>
                    <h5>{{ $project->client }}</h5>
                </li>
                @if ($project->arquitectes)
                <li>
                    <h4>Firma de arquitectos</h4>
                    <h5>{{ $project->arquitectes }}</h5>
                </li>
                @endif
                @if ($project->production)
                <li>
                    <h4>Producción</h4>
                    <h5 class="production">{{ $project->production }}</h5>
                </li>
                @endif
                <li>
                    <h4>Timing</h4>
                    <h5>{{ $project->date }}</h5>
                </li>
            </ul>
        </aside>
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
            console.log("asd")
            $(".ban").slick('slickNext');
        });
        $('.r').click(function(){
            $(".ban").slick('slickNext');
        });
    </script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('plugins/fancybox/jquery.fancybox-1.3.4.pack.js') }}"></script>

    <script>
        $(".gallery").fancybox();
    </script>

@endsection