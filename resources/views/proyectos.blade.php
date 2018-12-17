@extends('layout.default')

<?php $title = 'Proyectos - Veco'; ?>

@section('content')

    @include('layout.header-default')

    <section id="proyectos">
        <section id="cabecera">
            <h2 class="title">__ Proyectos</h2>
            <p>
                La auténtica revolución de Tecno radica en ser una «Fábrica de proyectos» líder que realiza obras únicas desde el punto de vista estético y de características técnicas. Arquitectos y contratistas internacionales de obras grandes y medianas eligen su experiencia desde más de sesenta años. Entre los proyectos especiales realizados por la empresa destacan el Parlamento Europeo de Bruselas, el aeropuerto Schiphol de Ámsterdam, el Museo Británico de Londres, el Ministerio de Justicia de París y oficinas como las sedes de Bulgari, Moleskine y el National Bank de Kuwait.
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

    <!-- Incluyo el footer y los script -->
    @include('layout.footer')
    @include('layout.scripts')

@endsection