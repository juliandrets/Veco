@extends('layout.default')

<?php $title = 'Nosotros - Veco'; ?>

@section('content')

    @include('layout.header-default')

    <section id="servicios">
        <section id="cabecera">
            <h2>::: Servicios</h2>
            <p>
                Veco es una empresa que, con su actividad, establece puentes entre ámbitos que podrían parecer tan irreconciliables como el técnico y el digital, el mundo de las oficinas, el confort y los nuevos estilos de vida, y la fusión entre lo público y lo privado. Llevamos más de sesenta años creando productos y proyectos únicos y característicos que trasladan una visión lúcida de la actualidad.
            </p>
        </section>

        <ul class="buttons">
            <li id="b1">Ingeniería Diseño Desarrollo </li>
            <li id="b2">Láser</li>
            <li id="b3">Punzonado CNC</li>
            <li id="b4">Guillotina CNC</li>
            <li id="b5">Corte de caño</li>
            <li id="b6">Plegado CNC</li>
            <li id="b7">Soldadura</li>
            <li id="b8">Tornería</li>
            <li id="b9">Balancinado</li>
            <li id="b10">Línea de pintura en polvo</li>
        </ul>

        <ul class="content">
            <li id="c1">
                <figure>
                    <img src="http://www.miesa.com.ar/miesa/wp-content/uploads/2014/07/pintura-11.jpg" alt="">
                </figure>
                <article>
                    <h2>Ingeniería Diseño Desarrollo  </h2>
                    <p>
                        <b>PROCESO</b> <br>
                        Contamos con Arquitectos y Diseñadores Industriales <br>

                        Asesoramos a nuestros clientes en el proceso de desarrollo para alcanzar soluciones constructivas óptimas.
                        <br>

                        Colaboramos en diseñar las soluciones constructivas más apropiadas y definir los mejores procesos de fabricación.
                        <br>
                    </p>
                </article>
            </li>
            <li id="c2">
                <figure>
                    <img src="http://vivaanapolis.com.br/portal/wp-content/uploads/2017/08/pintura.jpg" alt="">
                </figure>
                <article>
                    <h2>Láser</h2>
                    <p>
                        <b>PROCESO</b> <br>
                        El LÁSER DE FIBRA es un proceso de corte de última generación. Permite cotar las mas variadas y diversas formas, calar y perforar piezas muy complejas en diversos materiales y espesores. con este sistema , todo corte es posible, con la mejor precisión y velocidad.
                        <br>

                        <b>MATERIALES Y ESPESORES</b> <br>
                        Chapa de Hierro hasta 24 mm<br>
                        Acero Inoxidable hasta 20 mm<br>
                        Aluminio hasta 8 mm<br>
                        Latón hasta 8 mm <br>
                        <b>MAQUINARIA- MARCA Y MODELO</b> <br>
                        Laser FIBRA - SALVAGNINI FIBER L3 3KVA

                    </p>
                </article>
            </li>
            <li id="c3">
                <figure>
                    <img src="https://qualidadeonline.files.wordpress.com/2013/07/dhl.jpg" alt="">
                </figure>
                <article>
                    <h2>Punzonado CNC</h2>
                    <p>
                        <b>PROCESO</b> <br>
                        Las punzonadoras CNC son máquinas flexibles donde es posible fabricar piezas complejas y simples con precisión y rapidez. Las punzonadoras nos permiten hacer cambios en las piezas, como también embutidos, abocardados, ventilaciones, semi cortes y demás deformaciones en los distintos materiales.
                        <br>

                        <b>MATERIALES Y ESPESORES</b> <br>
                        Chapa de hierro hasta 4 mm <br>
                        Acero Inoxidable hasta 2 mm <br>
                        Aluminio hasta 3 mm <br>
                        Latón hasta 2 mm <br>
                        <b>MAQUINARIA- MARCA Y MODELO</b> <br>
                        Disponemos de dos PUNZONADORAS TRUMPF TP1000
                    </p>
                </article>
            </li>
            <li id="c4">
                <figure>
                    <img src="https://image.dhgate.com/0x0s/f2-albu-g5-M01-93-69-rBVaI1g0VseANlthAAEvhJHUVW8922.jpg/retro-nostalgia-industrial-feng-shui-pared.jpg" alt="">
                </figure>
                <article>
                    <h2>Guillotina CNC</h2>
                    <p>
                        <b>PROCESO</b> <br>
                        Cortes de todos tipo de material ferroso y no ferroso con precisión CNC..

                        <br>

                        <b>MATERIALES Y ESPESORES</b> <br>
                        Chapa de hierro hasta 8 mm <br>
                        Acero Inoxidable hasta 4 mm <br>
                        Aluminio hasta 6 mm <br>
                        Latón hasta 4 mm <br>
                        <b>MAQUINARIA- MARCA Y MODELO</b> <br>
                        Guillotina CNC AMADA 3 mts
                    </p>
                </article>
            </li>
            <li id="c5">
                <figure>
                    <img src="http://www.miesa.com.ar/miesa/wp-content/uploads/2014/07/pintura-11.jpg" alt="">
                </figure>
                <article>
                    <h2>Corte de caño</h2>

                    <p>
                        <b>PROCESO</b> <br>
                        Corte de todo tipo de caño con calidad y precisión. Cortes recto o en ángulo.
                        <br>

                        <b>MATERIALES Y ESPESORES</b> <br>
                        Caños cuadrados / Redondos / Rectangular / Oval. <br>
                        <b>MAQUINARIA- MARCA Y MODELO</b> <br>
                        DELLE GRAZIE SEMIAUTOMATICA
                    </p>
                </article>
            </li>
            <li id="c6">
                <figure>
                    <img src="http://www.miesa.com.ar/miesa/wp-content/uploads/2014/07/pintura-11.jpg" alt="">
                </figure>
                <article>
                    <h2>Plegado CNC </h2>

                    <p>
                        <b>PROCESO</b> <br>
                        El plegado CNC permite deformar piezas con distintos ángulos y radios, en serie y con la mayor precisión.
                        <br>

                        <b>MATERIALES Y ESPESORES</b> <br>
                        Chapa de Hierro / Acero Inox / Aluminio / Latón. <br>
                        <b>MAQUINARIA- MARCA Y MODELO</b> <br>
                        AMADA 2 MTS 100 TON <br>
                        ITURROSPE 3 MTS 120 TON <br>
                        DURMA 3 MTS 120 TON

                    </p>
                </article>
            </li>
            <li id="c7">
                <figure>
                    <img src="http://www.miesa.com.ar/miesa/wp-content/uploads/2014/07/pintura-11.jpg" alt="">
                </figure>
                <article>
                    <h2>Soldadura</h2>

                    <p>
                        <b>PROCESO</b> <br>
                        Soldamos utilizado distinto tipo se soldadura de acuerdo lo requiera el proceso y material.
                        <br>

                        <b>MATERIALES Y ESPESORES</b> <br>
                        Chapa de Hierro / Acero Inox / Aluminio / Latón. <br>
                        <b>MAQUINARIA- MARCA Y MODELO</b> <br>
                        TIG / MIG / PUNTO / PROYECCION.
                    </p>
                </article>
            </li>
            <li id="c8">
                <figure>
                    <img src="http://www.miesa.com.ar/miesa/wp-content/uploads/2014/07/pintura-11.jpg" alt="">
                </figure>
                <article>
                    <h2>Tornería</h2>

                    <p>
                        <b>PROCESO</b> <br>
                        Tornos semiautomáticos nos ayudan a abastecernos de piezas internas que complementan tareas.
                    </p>
                </article>
            </li>
            <li id="c9">
                <figure>
                    <img src="http://www.miesa.com.ar/miesa/wp-content/uploads/2014/07/pintura-11.jpg" alt="">
                </figure>
                <article>
                    Balancinado</h2>
                    <p>
                        <b>PROCESO</b> <br>
                        El proceso de balancinado lo utilizamos para complementar piezas que requieran una deformación especial.

                        <br>

                        <b>MATERIALES Y ESPESORES</b> <br>
                        Chapa de Hierro / Acero Inox / Aluminio / Latón. <br>
                        <b>MAQUINARIA- MARCA Y MODELO</b> <br>
                        Contamos con balancines de 20 y 30 toneladas

                    </p>
                </article>
            </li>
            <li id="c10">
                <figure>
                    <img src="http://www.miesa.com.ar/miesa/wp-content/uploads/2014/07/pintura-11.jpg" alt="">
                </figure>
                <article>
                    <h2>Línea de pintura en polvo</h2>
                    <p>
                        <b>PROCESO</b> <br>
                        Contamos con una de las líneas de pintura en Polvo CONTINUAS más modernas del país.
                        La línea de lavado en etapas (Desengrase / Enjuague / Fosfato / Pasivado) nos garantiza que la pieza está en optimas condiciones para recibir la pintura electrostática.
                        Por último, el viaje a un horno elevadizo de 25 metros da por finalizado el proceso.

                    </p>
                </article>
            </li>
        </ul>
    </section>

    <!-- Incluyo el footer y los script -->
    @include('layout.footer')
    @include('layout.scripts')

    <script type="text/javascript">
        const buttonsLength = 10;
        for (let item = 1; item <= buttonsLength; item++) {
            $("#b" + item).click(function () {
                for (let i = 1; i <= buttonsLength; i++) {
                    if (i == item) {
                        $("#c" + item).fadeIn("fast", function () {
                        });
                    } else {
                        $("#c" + i).fadeOut("fast", function () {
                            
                        })
                    }
                }
            });
        }
    </script>

@endsection