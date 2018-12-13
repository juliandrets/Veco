@extends('layout.default')

<?php $title = $project->name . '- Veco'; ?>

@section('content')

    @include('layout.header-default')
    
    <ul id="banner-proyecto">
        @foreach($project->pictures as $picture)
        <li>
            <div><a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
            <img src="/uploads/projects/{{ $picture->picture }}" alt="">
        </li>
        @endforeach
    </ul>

    <section id="proyecto">

        <ul class="map">
            <li><a href="/">Inicio</a> \</li>
            <li><a href="/proyectos">Proyectos</a> \</li>
            <li><a href="#">{{ $project->name }}</a></li>
        </ul>

        <section class="content">
            <h2>__ {{ $project->name }}</h2>

            <p>
                <strong>
                    {{ $project->description }}
                </strong>
                <br><br>
                {{ $project->text }}
            </p>
        </section>
        <aside>
            <iframe src="{{ $project->maps }}"  frameborder="0" style="border:0"></iframe>
            <ul>
                <li>
                    <h4>Lugar</h4>
                    <h5>{{ $project->place }}</h5>
                </li>
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
                <li>
                    <h4>Fecha</h4>
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
        $('#banner-proyecto').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            centerMode: true,
            variableWidth: true
        });
    </script>

@endsection