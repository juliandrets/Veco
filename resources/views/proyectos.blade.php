@extends('layout.default')

<?php $title = 'Veco'; ?>

@section('content')

    @include('layout.header-default')

    <section id="proyectos">
        <section id="cabecera">
            <h2>__ Proyectos</h2>
            <p>
                La auténtica revolución de Tecno radica en ser una «Fábrica de proyectos» líder que realiza obras únicas desde el punto de vista estético y de características técnicas. Arquitectos y contratistas internacionales de obras grandes y medianas eligen su experiencia desde más de sesenta años. Entre los proyectos especiales realizados por la empresa destacan el Parlamento Europeo de Bruselas, el aeropuerto Schiphol de Ámsterdam, el Museo Británico de Londres, el Ministerio de Justicia de París y oficinas como las sedes de Bulgari, Moleskine y el National Bank de Kuwait.
            </p>
        </section>

        <ul>
            <li>
                <img src="https://www.tecnospa.com/ContentsFiles/tecno_porcelanosa_preview.jpg" alt="">
                <section>
                    <div>
                        <h3>Porcelanosa</h3>
                        <h4>New York 2015</h4>
                    </div>
                </section>
            </li>
            <li>
                <img src="https://www.tecnospa.com/ContentsFiles/tecno_porcelanosa_preview.jpg" alt="">
                <section>
                    <div>
                        <h3>Porcelanosa</h3>
                        <h4>New York 2015</h4>
                    </div>
                </section>
            </li>
            <li>
                <img src="https://www.tecnospa.com/ContentsFiles/tecno_porcelanosa_preview.jpg" alt="">
                <section>
                    <div>
                        <h3>Porcelanosa</h3>
                        <h4>New York 2015</h4>
                    </div>
                </section>
            </li>
        </ul>
    </section>

    <!-- Incluyo el footer y los script -->
    @include('layout.footer')
    @include('layout.scripts')

@endsection