@extends('layout.default')

<?php $title = $product->name . '- Veco'; ?>

@section('content')

    @include('layout.header-default')

    <section id="banner-proyecto">
        <section class="arrow l"><i class="fa fa-angle-left" aria-hidden="true"></i></section>
        <section class="arrow r"><i class="fa fa-angle-right" aria-hidden="true"></i></section>

        <ul class="ban">
            @foreach($product->pictures as $picture)
            <li>
                <div><a class="example-image-link" href="/uploads/products/{{ $picture->picture }}" data-lightbox="example-set"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
                <img src="/uploads/products/{{ $picture->picture }}" alt="">
            </li>
            @endforeach
        </ul>
    </section>

    <section id="proyecto">
        <ul class="map">
            <li><a href="/">Inicio</a> \</li>
            <li><a href="/productos">Productos</a> \</li>
            <li><a href="/productos/{{ $product->category->name }}">{{ $product->category->name }}</a> \</li>
            <li><a href="#">{{ $product->name }}</a></li>
        </ul>

        <section class="content" style="width: 100% !important">
            <h2 class="title">__ {{ $product->name }}</h2>

            <p>
                {!! $product->description !!}
            </p>

            @if ($product->file)
                <section class="file">
                    <a href="#ex1" rel="modal:open"><h2><i class="fa fa-file-archive-o" aria-hidden="true"></i> Descarga la ficha técnica</h2></a>
                </section>
            @endif

        </section>
    </section>

    <div id="ex1" class="modal">
        <form action="/newsletter/suscripcion" method="POST">
            {{ csrf_field() }}
            <section class="inputs">
                <h2>Para continuar es necesario que nos dejes tu email</h2> <br><br>
                <div>
                    <label>
                        <p>Email *</p>
                        <input id="name" type="email" name="email" required>
                        <input type="hidden" name="where" value="product">
                    </label>
                </div>
            </section>
            <hr>

            <section class="accept">
                <input type="checkbox" name="accept" id="accept" >
                <p>Acepto recibir emails con las nuevas noticias de Veco y sus productos.</p>
            </section>
            <br>
            <button id="submit" class="disabled" disabled>Enviar suscripcion</button>
        </form>
    </div>

    <!-- Incluyo el footer y los script -->
    @include('layout.footer')
    @include('layout.scripts')

    <!-- Slick carrousel -->
    <script type="text/javascript" src="/plugins/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

    <script type="text/javascript">
        $('.ban').slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            centerMode: true,
            variableWidth: true
        });
        $('.l').click(function(){
            $(".ban").slick('slickPrev');
        });
        $('.r').click(function(){
            $(".ban").slick('slickNext');
        });
    </script>

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

    @if(!empty(Session::get('query_data')) && Session::get('query_data') == 'some_data')
        <script>
            $(function() {
                var url = $(this).attr('href');
                window.open("/uploads/products/files/<?php echo $product->file; ?>");
            });
        </script>
    @endif

@endsection