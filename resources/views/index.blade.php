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

    <section class="home">

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