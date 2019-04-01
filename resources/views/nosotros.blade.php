@extends('layout.default')

<?php $title = 'Nosotros - Veco'; ?>

@section('content')

    @include('layout.header-default')

    <section id="about">
        <section id="cabecera">
            <h2 class="title">::: Nosotros</h2>
        </section>
    </section>

    <!-- Incluyo el footer y los script -->
    @include('layout.footer')
    @include('layout.scripts')

@endsection