@extends('layout.default')

<?php $title = 'Contacto - Veco'; ?>

@section('content')

    @include('layout.header-default')

    <section id="contacto">
        <section id="cabecera">
            <h2>::: Contacto</h2>
            <p>
                Estos son nuestros medios de contacto.
            </p>
        </section>

        <section class="content">

            <section id="datos-contacto">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.814977114614!2d-58.90578398502831!3d-34.60883988045824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bc91cc8145a8df%3A0xa236c074e449aef9!2sCaminito%2C+General+Rodriguez%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1552679097485" height="350" style="width: 100%; padding-bottom: 30px" frameborder="0" style="border:0" allowfullscreen></iframe>

                <ul>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Caminito 950 | Gral. Rodríguez </li>
                    <li><i class="fa fa-phone-square" aria-hidden="true"></i> 115218-2716 </li>
                    <li><i class="fa fa-phone-square" aria-hidden="true"></i> 115218-2717 </li>
                    <li><i class="fa fa-phone-square" aria-hidden="true"></i> 115218-2718 </li>
                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i> info@veco.com.ar </li>
                </ul>
            </section>

            <form action="" method="POST">
                <section class="form">
                    <section>
                        <div class="input">
                            <p>Nombre *</p>
                            <input type="text" name="name" required>
                        </div>
                        <div class="input">
                            <p>Email *</p>
                            <input type="text" name="mail" required>
                        </div>
                        <div class="input">
                            <p>Teléfono *</p>
                            <input type="text" name="phone" required>
                        </div>
                        <div class="input">
                            <p>Empresa</p>
                            <input type="text" name="company">
                        </div>
                    </section>
                    <section>
                        <div class="input">
                            <p>Sitio web</p>
                            <input type="text" name="name">
                        </div>
                        <div class="input">
                            <p>Consulta</p>
                            <textarea name="text" required></textarea>
                        </div>
                    </section>
                </section>
                <button>Enviar</button>
            </form>

        </section>
    </section>

    <!-- Incluyo el footer y los script -->
    @include('layout.footer')
    @include('layout.scripts')


@endsection