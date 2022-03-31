@extends('layouts.master_principal')
@section('content')

<header id="fh5co-header" class="fh5co-cover" role="banner"
    style="background-image:url({{ asset ('images/j_img2.jpg') }});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1> Contacto </h1>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="fh5co-section">
    <div class="container">
        <div class="fh5co-contact-info col-lg-7">
            <h3>Informatición de contacot</h3>
            <ul>
                <li class="address">Prolongación, 5 de Febrero<br>Barrio San Vicente, CP 29160 Chiapa de Corzo, Chis.</li>
                <li class="phone">Tel:  961 278 9869</li>
<!--                <li class="email">Email: 7397@ittg.com</a></li>-->

            </ul>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Google World Map</h3>
            </div>
            <div class="panel-body panel-body-map">
                <div id="google_world_map" style="width: 100%; height: 300px;"></div>
            </div>
        </div>

    </div>
</div>

@endsection