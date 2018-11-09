@extends('layout.default')

<?php $title = 'Veco'; ?>

@section('content')

    @include('layout.header-default')
    
    <ul id="banner-proyecto">
        <li>
            <div><a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
            <img src="https://www.tecnospa.com/ContentsFiles/tecno_porcelanosa_gallery_2(1).jpg" alt="">
        </li>
        <li>
            <div><a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
            <img src="https://www.tecnospa.com/ContentsFiles/tecno_porcelanosa_gallery_3(1).jpg" alt="">
        </li>
        <li>
            <div><a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
            <img src="https://www.tecnospa.com/ContentsFiles/tecno_porcelanosa_gallery_4(1).jpg" alt="">
        </li>
        <li>
            <div><a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
            <img src="https://www.tecnospa.com/ContentsFiles/tecno_porcelanosa_gallery_1(1).jpg" alt="">
        </li>
    </ul>

    <section id="proyecto">

        <ul class="map">
            <li><a href="/">Inicio</a> \</li>
            <li><a href="/proyectos">Proyectos</a> \</li>
            <li><a href="#">Proyecto</a></li>
        </ul>

        <section class="content">
            <h2>__ Porcelanosa</h2>

            <p>
                TECNO AT ORGATEC <br><br>

                At Orgatec, Tecno will present new scenarios that re-design the paradigms of work, with a language that talks of flexibility, customisation, comfort.Efficient, welcoming and responsive furnishings: in Cologne, the latest multifunctional proposals interact with iconic products which feature new finishes, showcasing Tecno’s world and its unique way of designing workplaces.
                <br><br>
                Orgatec, Cologne
                23-27 October 201
                Hall 6.1 - Stand B070/C071
                __________<br><br>
                <br><br>
                WORK SCENARIOS AT THE TECNO STAND<br><br>
                <br><br>
                Different working codes, new workplace behaviours but the person remains at the centre of these spaces: moving through the stand, which represents the ideal office building floor, enclosed by W80 partition walls, the visitor discovers multiform solutions that suggest free movement options, favouring collaboration and meeting, incorporating solutions for contemporary layout needs.
                <br><br>
                The areas, the workstations and the products are equipped with the pervasive io.T - The Intelligence of Tecno - offering the connection required to manage services, equipment, groups and workflows, improving overall user wellbeing.
                <br><br>
                At the entrance, comfortable P32 armchairs with Pons tables create traditional waiting areas, while the padded islands of the Archipelago series configure more relaxing and informal lounges.
                <br><br>
                If a meeting has been scheduled, for more intimate discussion, modular RS2 benches dialogue with the Plau chairs and Nomos desk, as a conversation takes place around the Asymmetrical table with Vela chairs, awarded the Compasso D’Oro; the Asymmetrical collection features once more, this time developed with a large geometric top, perfect for taking part in a high-tech conference call seated comfortably on the slender S142 chairs.
                <br><br>
                A series of different working activities take place throughout the day, with Tecno proposals fulfilling every need, creating configurations for dynamic exchange or individual focus, and the new products confirm Tecno's signature in functionality and customisability.
                <br><br>
                Clusters more focused on work are organised with Clavis tool free workstations - both standard and height adjustable or standing desks - combined with Linea, the new reconfigurable micro-architectural system designed by Zanon Architetti Associati and the Centro Progetti Tecno: the modules are occasional surfaces or seating, which transform into partitions or elements for archiving and storage.
                <br><br>
                These configurations that reflect open spaces or co-working situations also include Tecno's Aura armchairs, another novelty presented at Orgatec and designed by Rainlight and Centro Progetti Tecno, with an enveloping shape to create moments of privacy. The setting is further enriched by the Todo Modo sofa, the re-edition of a project by Jean-Michel Wilmotte for the Louvre, adapted for new uses.
                <br><br>
                The areas dedicated to management and cubicles workstation are more traditional, both updated by "discordant" elements by Jean-Michel Wilmotte: in the executive office - resolved with the Asymmetrical desk, the Cento storage system, the Vela and S142 chairs - the almost brutalist T50 table creates a visual contrast with the iconic D70 sofa, while the Hortus wooden benches complete the sequence of zones for intensive work, defined by the Multy sound-absorbing partition wall system.
                <br><br>
                Tecno's partner Viabizzuno has provided the lighting for the whole booth, with lighting points controlled by the io.T system positioned across the multiple connected areas.
            </p>
        </section>
        <aside>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.0167132768424!2d-58.383759084331516!3d-34.60373888045957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4aa9f0a6da5edb%3A0x11bead4e234e558b!2sObelisco!5e0!3m2!1ses!2sar!4v1541542162429"  frameborder="0" style="border:0"></iframe>
            <ul>
                <li>
                    <h4>Lugar</h4>
                    <h5>New York</h5>
                </li>
                <li>
                    <h4>Cliente</h4>
                    <h5>Porcelanosa</h5>
                </li>
                <li>
                    <h4>Firma de arquitectos</h4>
                    <h5>Foster + Partners</h5>
                </li>
                <li>
                    <h4>Fecha</h4>
                    <h5>2015</h5>
                </li>
            </ul>
        </aside>
    </section>

    <!-- Incluyo el footer y los script -->
    @include('layout.footer')
    @include('layout.scripts')

    <!-- Slick carrousel -->
    <script type="text/javascript" src="/plugins/slick/slick.min.js"></script>

    <script type="text/javascript">
        $('#banner-proyecto').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            centerMode: true,
            variableWidth: true
        });
    </script>

@endsection