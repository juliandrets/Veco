@extends('layout.default')

<?php $title = 'Newsletter - Veco'; ?>

@section('content')

    @include('layout.header-default')

    <section id="newsletter-section">
        <section id="cabecera">
            <h2>::: Newsletter</h2>
        </section>

        <section id="suscripcion">

            <form action="newsletter/suscripcion" method="POST">
                {{ csrf_field() }}

                @if($event = app('request')->input('event'))
                    @if($event == 'suscribe-ok')
                        <p class="aviso aviso-success"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Usted se ha suscripto correctamente a nuestro newsletter.</p>
                    @endif
                @endif

                <section class="inputs">
                    <div>
                        <label>
                            <p>Name *</p>
                            <input id="name" type="text" name="name" required>
                            <input type="hidden" name="where" value="newsletter">
                        </label>
                    </div>
                    <div>
                        <label>
                            <p>Email *</p>
                            <input id="name" type="email" name="email" required>
                        </label>
                    </div>
                </section>
                <hr>

                <section class="accept">
                    <input type="checkbox" name="accept" id="accept" >
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam aspernatur at beatae cum doloremque ducimus error ipsa itaque labore, nulla placeat praesentium qui, ratione repudiandae sit tempore vero voluptatem!</p>
                </section>

                <hr>

                <button id="submit" class="disabled" disabled>Enviar suscripcion</button>
            </form>
        </section>
    </section>

    <!-- Incluyo el footer y los script -->
    @include('layout.footer')
    @include('layout.scripts')

    <script>
        $('#accept').change(function () {
            if ($('#accept').prop("checked")) {
                $("#submit").removeAttr('disabled');
                $("#submit").removeClass('disabled');
            } else {
                $("#submit").attr('disabled', 'disabled');
                $("#submit").addClass('disabled');
            }
        });
    </script>

@endsection