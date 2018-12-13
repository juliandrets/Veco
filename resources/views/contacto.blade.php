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
                <h2>VECO</h2>
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