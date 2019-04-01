
<body style="background: #f9f9f9">
<div style="margin: 0 auto; width: 700px; padding: 30px; border: 1px solid #f1f1f1; border-radius: 5px; background-color: white">
    <img src="{{asset('/img/logo.png')}}" alt="" style="height: 100px">

    <h1 style="margin: 30px 0px 10px 0px;">:: Newsletter</h1>
    
    <div style="height: 1px; background-color: #F1F1F1; margin-top: 0px"></div>

    <h3 style="color: white; background-color: black; display: inline-block; font-size: 12px; padding: 4px 8px 4px 8px; margin-top: 20px;">{{ $subtitulo }}</h3>
    <h2 style="margin-top: 0px;">{{ $demo->obj->name }}</h2>
    <figure style="height: 260px; width: 100%; overflow: hidden;margin-left: 0px ">
        <img src="/uploads/projects/{{ $picture }}" alt="" style="width: 100%">
    </figure>
    <p>
        {{ $demo->obj->description }}
    </p>

    <div style="text-align: center">
        <a href="#">
            <div style="color: white; background-color: black; display: inline-block; font-size: 15px; padding: 12px 12px 12px 12px; margin-top: 20px; "> VER PUBLICACION</div>
        </a>
    </div>
</div>
</body>