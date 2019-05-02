@extends('layout.default')

<?php $title = 'Clientes - Veco'; ?>

@section('content')

    @include('layout.header-default')

    <section id="about">
        <section id="cabecera">
            <h2 class="title">::: Clientes</h2>
        </section>

        <section class="marcas">
            <ul>
                <li><figure><img src="/img/clientes/1.jpg" alt=""></figure></li>
                <li><figure><img src="/img/clientes/2.jpg" alt=""></figure></li>
                <li><figure><img src="/img/clientes/3.jpg" alt=""></figure></li>
                <li><figure><img src="/img/clientes/4.jpg" alt=""></figure></li>
                <li><figure><img src="/img/clientes/5.jpg" alt=""></figure></li>
                <li><figure><img src="/img/clientes/6.jpg" alt=""></figure></li>
                <li><figure><img src="/img/clientes/7.jpg" alt=""></figure></li>
                <li><figure><img src="/img/clientes/8.jpg" alt=""></figure></li>
                <li><figure><img src="/img/clientes/9.jpg" alt=""></figure></li>
                <li><figure><img src="/img/clientes/10.jpg" alt=""></figure></li>
            </ul>
        </section>
    </section>

    <!-- Incluyo el footer y los script -->
    @include('layout.footer')
    @include('layout.scripts')


@endsection