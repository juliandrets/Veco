@extends('layout.default')

<?php $title = 'Veco'; ?>

@section('content')

    @include('layout.header-default')
    
    <ul id="banner">
        <li>
            <figure>
                <img src="https://images.pexels.com/photos/1068523/pexels-photo-1068523.jpeg" alt="">
            </figure>
            <section class="content">
                <section>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus assumenda consectetur cum deleniti dolorum earum fuga ipsum magnam maxime modi molestias nesciunt nobis</p>
                    <i class="fa fa-plus icon" aria-hidden="true"></i>
                </section>
            </section>
        </li>
        <li>
            <figure>
                <img src="https://wallpapertag.com/wallpaper/full/3/5/d/119537-business-wallpaper-2560x1440-for-iphone-7.jpg" alt="">
            </figure>
            <section class="content">
                <section>
                    <p>Ab accusamus assumenda consectetur cum deleniti dolorum earum fuga ipsum magnam maxime modi molestias nesciunt nobis</p>
                    <i class="fa fa-plus icon" aria-hidden="true"></i>
                </section>
            </section>
        </li>
    </ul>

    <section id="productos">
        <section class="content">
            <h2>__ Productos</h2>
            <section>
                <ol class="opciones">
                    <li class="b-op1">Oficinas</li>
                    <li class="b-op2">Tienda</li>
                    <li class="b-op3">Espacios Públicos</li>
                    <li class="b-op4">Hogar</li>
                </ol>
                <ul class="opcionContent">
                    <li class="op1">
                        <article>
                            <p>1Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dolorem error nulla quos sunt. Accusantium consectetur corporis delectus dolores eligendi, hic, illumor sit amet, consectetur adipisicing elit. Amet dolorem error nulla quos sunt. Accusantium consectetur corporis delectus dolores eligendi, hic, illum impedit natus nihil, non officiis quo sit tempore.</p>
                        </article>
                    </li>
                    <li class="op2">
                        <article>
                            <p>2Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dolorem error nulla quos sunt. Accusantium consectetur corporis delectus dolores eligendi, hic, illumor sit amet, consectetur adipisicing elit. Amet dolorem error nulla quos sunt. Accusantium consectetur corporis delectus dolores eligendi, hic, illum impedit natus nihil, non officiis quo sit tempore.</p>
                        </article>
                    </li>
                    <li class="op3">
                        <article>
                            <p>3Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dolorem error nulla quos sunt. Accusantium consectetur corporis delectus dolores eligendi, hic, illumor sit amet, consectetur adipisicing elit. Amet dolorem error nulla quos sunt. Accusantium consectetur corporis delectus dolores eligendi, hic, illum impedit natus nihil, non officiis quo sit tempore.</p>
                        </article>
                    </li>
                    <li class="op4">
                        <article>
                            <p>4Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dolorem error nulla quos sunt. Accusantium consectetur corporis delectus dolores eligendi, hic, illumor sit amet, consectetur adipisicing elit. Amet dolorem error nulla quos sunt. Accusantium consectetur corporis delectus dolores eligendi, hic, illum impedit natus nihil, non officiis quo sit tempore.</p>
                        </article>
                    </li>
                </ul>
            </section>
        </section>
        <aside>
            <ul>
                <li class="op1"><img src="https://www.tecnospa.com/ContentsFiles/preview_home.jpg" alt=""></li>
                <li class="op2"><img src="https://www.tecnospa.com/ContentsFiles/preview_partitions.jpg" alt=""></li>
                <li class="op3"><img src="https://www.tecnospa.com/ContentsFiles/preview_iot.jpg" alt=""></li>
                <li class="op4"><img src="https://www.tecnospa.com/ContentsFiles/preview_work(1).jpg" alt=""></li>
                <li class="op5"><img src="https://www.tecnospa.com/ContentsFiles/preview_public(0).jpg" alt=""></li>
            </ul>
        </aside>
    </section>

    <section id="portfolio-index">
        <h2>__ Nuestros Trabajos</h2>
    </section>

    <!-- Incluyo el footer y los script -->
    @include('layout.footer')
    @include('layout.scripts')

    <!-- Wow Slider -->
    <script type="text/javascript" src="{{ asset('plugins/wow/wowslider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/wow/script.js') }}"></script>

    <!-- Slick carrousel -->
    <script type="text/javascript" src="/plugins/slick/slick.min.js"></script>
    <script type="text/javascript">
         $(document).ready(function() {
            $('#banner').slick({
                autoplay: true,
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear',
                slidesToShow: 1,
                arrows: false
            });
        });
     </script>
@endsection