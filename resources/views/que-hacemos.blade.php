@extends('layout.default')

<?php $title = 'Nosotros - Veco'; ?>

@section('content')

    @include('layout.header-default')

    <section id="about">
        <section id="cabecera">
            <h2 class="title">::: Que hacemos</h2>
            <p>
                VECO, diseña, desarrolla e implementa soluciones para espacios de trabajo y ocio.  
                Propuestas innovadoras con alto contenido estético y funcional, hacen al desarrollo de
                productos y suministros especiales.
                Nuestra fábrica, constituye un lugar de diseño y producción donde los procesos
                tecnológicos convergen con la artesanía y la capacidad de adaptarse a las necesidades
                del cliente.
                La especialización en grandes proyectos y una estrecha relación de colaboración con el
                diseñador siempre han caracterizado la actividad de la empresa.
                <br><br>
            </p>
        </section>
    </section>

    <!-- Incluyo el footer y los script -->
    @include('layout.footer')
    @include('layout.scripts')

@endsection