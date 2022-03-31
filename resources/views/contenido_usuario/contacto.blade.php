@extends('layouts.master_usuario')
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
                        <h2></h2>
                        <div class="simply-countdown simply-countdown-one"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="fh5co-section">
    <div class="container">
        <div class="fh5co-contact-info col-lg-7">
            <h3>Información de contacot</h3>
            <ul>
                <li class="address">Prolongación, 5 de Febrero<br>Barrio San Vicente, CP 29160 Chiapa de Corzo, Chis.</li>
                <li class="phone">Tel:  961 278 9869</li>
<!--                <li class="email">Email: 7397@ittg.com</a></li>-->

            </ul>
        </div>

        <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 4000px">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d140991.81760305926!2d-92.80143823798458!3d16.791671844203577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ed25e4870f975d%3A0xd141ae266ed17604!2sSal%C3%B3n%20Rehilete!5e0!3m2!1ses-419!2smx!4v1648746164871!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>
</div>

@endsection