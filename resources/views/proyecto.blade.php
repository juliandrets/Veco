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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.0167132768424!2d-58.383759084331516!3d-34.60373888045957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4aa9f0a6da5edb%3A0x11bead4e234e558b!2sObelisco!5e0!3m2!1ses!2sar!4v1541542162429"  frameborder="0" style="border:0"></iframe>
            <ul>
                <li>
                    <h4>Lugar</h4>
                    <h5>{{ $project->place }}</h5>
                </li>
                <li>
                    <h4>Cliente</h4>
                    <h5>{{ $project->client }}</h5>
                </li>
                <li>
                    <h4>Firma de arquitectos</h4>
                    <h5>{{ $project->arquitectes }}</h5>
                </li>
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