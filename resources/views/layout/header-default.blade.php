<section id="loading">
	<div class="sk-circle">
	  <div class="sk-circle1 sk-child"></div>
	  <div class="sk-circle2 sk-child"></div>
	  <div class="sk-circle3 sk-child"></div>
	  <div class="sk-circle4 sk-child"></div>
	  <div class="sk-circle5 sk-child"></div>
	  <div class="sk-circle6 sk-child"></div>
	  <div class="sk-circle7 sk-child"></div>
	  <div class="sk-circle8 sk-child"></div>
	  <div class="sk-circle9 sk-child"></div>
	  <div class="sk-circle10 sk-child"></div>
	  <div class="sk-circle11 sk-child"></div>
	  <div class="sk-circle12 sk-child"></div>
	</div>
</section>

<header>
	<nav>
		<a href="/"><img src="/img/logo.png" alt="Logo Veco" class="logo"></a>
		<div class="b-menu">
			<i class="fa fa-bars" aria-hidden="true"></i>
		</div>
	</nav>

	<section id="menu">
        <article>
            <section>
                <div class="b-menu-a">
                    <i class="fa fa-close" aria-hidden="true"></i>
                </div>
                <section class="second-menu">
                    <ul id="products-menu">
                        @foreach(App\ProductCategory::orderBy('id', 'desc')->get() as $category)
                        <li><a href="/productos/{{ $category->name }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                    <ul id="veco-menu">
                        <li><a href="/que-hacemos">Que hacemos</a></li>
                        <li><a href="/nosotros">Quienes somos</a></li>
                        <li><a href="/clientes">Nuestros Clientes</a></li>
                        <li><a href="/fabrica">Fábrica</a></li>
                        <li><a href="/showroom">Showroom</a></li>
                    </ul>
                </section>
                <ul class="main-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="#" id="veco-button">Veco</a></li>
                    <li><a href="/proyectos">Obras</a></li>
                    <li><a href="#" id="products-button">Productos y Diseños</a></li>
                    <li style="height: 10px"></li>
                    <li><a href="/noticias">Noticias</a></li>
                    <li><a href="/contacto">Contacto</a></li>
                    <li><a href="/newsletter">Newsletter</a></li>
                </ul>
            </section>
        </article>
	</section>
</header>