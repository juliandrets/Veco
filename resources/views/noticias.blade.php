@extends('layout.default')

<?php $title = 'Veco'; ?>

@section('content')

    @include('layout.header-default')

    <section id="blog">
        <h2>__ Últimas noticias</h2>
        <ul>
            <li>
                <figure>
                    <section class="hover"><a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a></section>
                    <img src="https://wallpapertag.com/wallpaper/full/3/5/d/119537-business-wallpaper-2560x1440-for-iphone-7.jpg" alt="">
                </figure>
                <h3>Lorem ipsum dolor sit amet</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet esse, eum odio quisquam quo suscipit temporibus! Dignissimos dolore ducimus eligendi, iusto maxime minus rem sed ullam.
                </p>
                <a href="#">Descubre más</a>
            </li>
            <li>
                <figure>
                    <section class="hover"><a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a></section>
                    <img src="https://images.pexels.com/photos/1068523/pexels-photo-1068523.jpeg" alt="">
                </figure>
                <h3>Lorem ipsum dolor sit amet</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente similique, velit. Corporis debitis, ducimus eos harum nam provident quae veritatis.
                </p>
                <a href="#">Descubre más</a>
            </li>
            <li>
                <figure>
                    <section class="hover"><a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a></section>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTr5YX18k_vdC1jFkxjQ5w5B_tfyHbTkwIDOpRz3y9vgNjTwHpx" alt="">
                </figure>
                <h3>Lorem ipsum dolor sit amet</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ducimus fugit ipsum natus, nesciunt placeat quibusdam similique voluptates.
                </p>
                <a href="#">Descubre más</a>
            </li>
            <li>
                <figure>
                    <section class="hover"><a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a></section>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTr5YX18k_vdC1jFkxjQ5w5B_tfyHbTkwIDOpRz3y9vgNjTwHpx" alt="">
                </figure>
                <h3>Lorem ipsum dolor sit amet</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ducimus fugit ipsum natus, nesciunt placeat quibusdam similique voluptates.
                </p>
                <a href="#">Descubre más</a>
            </li>
        </ul>
    </section>

    <!-- Incluyo el footer y los script -->
    @include('layout.footer')
    @include('layout.scripts')

    <script>
        // default
        $(".b-op1").addClass("active");

        $(".b-op1").click(function () {
            $(".op1").fadeIn("fast", function() {});
            $(".op2").css("display", "none");
            $(".op3").css("display", "none");
            $(".op4").css("display", "none");
            $(".op5").css("display", "none");

            $(this).addClass("active");
            $(".b-op2").removeClass("active");
            $(".b-op3").removeClass("active");
            $(".b-op4").removeClass("active");
            $(".b-op5").removeClass("active");
        });
        $(".b-op2").click(function () {
            $(".op1").css("display", "none");
            $(".op2").fadeIn("fast", function() {});
            $(".op3").css("display", "none");
            $(".op4").css("display", "none");
            $(".op5").css("display", "none");

            $(this).addClass("active");
            $(".b-op1").removeClass("active");
            $(".b-op3").removeClass("active");
            $(".b-op4").removeClass("active");
            $(".b-op5").removeClass("active");
        });
        $(".b-op3").click(function () {
            $(".op1").css("display", "none");
            $(".op2").css("display", "none");
            $(".op3").fadeIn("fast", function() {});
            $(".op4").css("display", "none");
            $(".op5").css("display", "none");

            $(this).addClass("active");
            $(".b-op1").removeClass("active");
            $(".b-op2").removeClass("active");
            $(".b-op4").removeClass("active");
            $(".b-op5").removeClass("active");
        });
        $(".b-op4").click(function () {
            $(".op1").css("display", "none");
            $(".op2").css("display", "none");
            $(".op3").css("display", "none");
            $(".op4").fadeIn("fast", function() {});
            $(".op5").css("display", "none");

            $(this).addClass("active");
            $(".b-op1").removeClass("active");
            $(".b-op2").removeClass("active");
            $(".b-op3").removeClass("active");
            $(".b-op5").removeClass("active");
        });
        $(".b-op5").click(function () {
            $(".op1").css("display", "none");
            $(".op2").css("display", "none");
            $(".op3").css("display", "none");
            $(".op4").css("display", "none");
            $(".op5").fadeIn("fast", function() {});

            $(this).addClass("active");
            $(".b-op1").removeClass("active");
            $(".b-op2").removeClass("active");
            $(".b-op3").removeClass("active");
            $(".b-op4").removeClass("active");
        });
    </script>

    <!-- Slick carrousel -->
    <script type="text/javascript" src="/plugins/slick/slick.min.js"></script>

    <script type="text/javascript">
        $('#banner').slick({
            autoplay: true,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear',
        });
        $('.portfolio-ul').slick({
            autoplay: true,
            infinite: true,
            speed: 500
        });
        $('.next').click(function(){
            $(".portfolio-ul").slick('slickNext');
        });
    </script>

@endsection