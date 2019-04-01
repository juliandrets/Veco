@extends('layout.default')

<?php $title = 'Proyectos - Veco'; ?>

@section('content')

    @include('layout.header-default')

    <section id="proyectos">
        <section id="cabecera">
            <h2 class="title">__ Proyectos</h2>
            <p>
                VECO, diseña, desarrolla e implementa soluciones para espacios de trabajo y ocio.  
                Propuestas innovadoras con alto contenido estético y funcional, hacen al desarrollo de
                productos y suministros especiales.
                Nuestra fábrica, constituye un lugar de diseño y producción donde los procesos
                tecnológicos convergen con la artesanía y la capacidad de adaptarse a las necesidades
                del cliente.
                La especialización en grandes proyectos y una estrecha relación de colaboración con el
                diseñador siempre han caracterizado la actividad de la empresa.
            </p>
        </section>

        <ul>
            @foreach($projects as $project)
            <li>
                @if (count($project->pictures))
                    <figure>
                        <img src="uploads/projects/{{ $project->firstPicture->first()->picture }}" alt="">
                    </figure>
                @endif
                <section>
                    <a href="proyecto/{{ $project->id }}"><div>
                        <h3>{{ $project->name }}</h3>
                        <h4>{{ $project->place }} / {{ $project->date }}</h4>
                    </div></a>
                </section>
            </li>
            @endforeach
        </ul>

    </section>

    {{ $projects->links() }}

    <!-- Incluyo el footer y los script -->
    @include('layout.footer')
    @include('layout.scripts')

@endsection