@extends('layout.default')

<?php $title = 'Nosotros - Veco'; ?>

@section('content')

    @include('layout.header-default')

    <section id="about">
        <section id="cabecera">
            <h2 class="title">::: Quiénes somos</h2>
            <p>
                Veco es una empresa que, con su actividad, establece puentes entre ámbitos que podrían parecer tan irreconciliables como el técnico y el digital, el mundo de las oficinas, el confort y los nuevos estilos de vida, y la fusión entre lo público y lo privado. Llevamos más de sesenta años creando productos y proyectos únicos y característicos que trasladan una visión lúcida de la actualidad.
            </p>
        </section>

        <ul class="items">
            <li>
                <figure>
                    <img src="https://www.tecnospa.com/ContentsFiles/tecno_azienda_1(0)_-145883262.png" alt="">
                </figure>
                <article>
                    <div>
                        <h2 class="title">::: Fábrica de proyectos</h2>
                        <p>Veco es líder en la realización de proyectos de interiorismo para lugares de trabajo y espacios comunes, pero también en el diseño y la fabricación de mobiliario para oficinas y áreas de intenso tráfico. Esto involucra a todos los sectores de actividad de la empresa de manera integral. El producto junto con la tecnología de producción, las personas y su formación, el concepto de proyecto con el lugar que lo alberga y la comunicación como punto de confluencia.</p>
                    </div>
                </article>
            </li>
            <li>
                <article>
                    <div>
                        <h2 class="title">::: Misión y alicientes</h2>
                        <p>La historia, los valores y las prácticas constituyen el núcleo de la empresa, además de ser la plataforma que permite un desarrollo continuo. Tecno es una empresa que actúa de acuerdo con sus valores originales: saber hacer, conocimiento del proyecto, atención a la evolución de la forma de trabajar, investigación y digitalización, manteniendo siempre un equilibrio armonioso entre calidad, innovación y valor estético sofisticado.</p>
                    </div>
                </article>

                <figure>
                    <img src="https://www.tecnospa.com/ContentsFiles/tecno_azienda_2(0)_-1452773536.jpg" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img src="https://www.tecnospa.com/ContentsFiles/tecno_azienda_3_-1095499079.jpg" alt="">
                </figure>

                <article>
                    <div>
                        <h2 class="title">::: Innovación</h2>
                        <p>El interés por las nuevas formas de trabajar permite a Tecno abordar aspectos y necesidades en constante evolución. Formas, materiales, patentes, funciones, técnicas de producción e integración tecnológica son algunos de los elementos clave que guían a la empresa en el proceso de innovación. Tecno crea productos únicos tanto desde el punto de vista estético como de especificaciones técnicas y tecnología</p>
                    </div>
                </article>
            </li>
        </ul>
    </section>

    <!-- Incluyo el footer y los script -->
    @include('layout.footer')
    @include('layout.scripts')

@endsection