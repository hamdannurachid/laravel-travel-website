@extends('layouts.app')
@section('title', 'Nomads')
@section('content')
<header class="text-center">
    <h1>Telusuri Dunia Satu Sentuhan</h1>
    <br>

    <p class="mt-3">Rencanakan wisata asyik
        <br>
        bersama banyak orang
    </p>
    <a href="#popular" class="btn btn-get-started px-4 mt-4">
        Get Started
    </a>
</header>


<main>
    <div class="container">
        <section class="section-stats row justify-content-center" id="stats">
            <div class="col-3 col-md-2 stats-detail">
                <h2>14K</h2>
                <p>Members</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>32</h2>
                <p>Destinasi</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>420</h2>
                <p>Hotel</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>70</h2>
                <p>Partners</p>
            </div>
        </section>

    </div>


<section class="section-popular" id="popular">
    <div class="container">
        <div class="row">
            <div class="col text-center section-popular-heading">
                <h2>Wisata Populer</h2>
                <p>Nikmati keindahan disamping Anda Indonesia dan Dunia</p>
            </div>
        </div>
    </div>
</section>

<section class="section-popular-content" id="popularContent">
    <div class="container">
        <div class="section-popular-travel row justify-content-center">
            @foreach ($items as $item)
            <div class="col-sm-6 col-md-4 col-lg-3">
                    {{-- {{ url('storage/'.$item->image)->count() }} --}}

                {{-- <div class="card-travel text-center d-flex flex-column" style="background-image: {{ url('storage/'.$item->galleries->count()->first()->image) }};"> --}}
                {{-- <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }} ');"> --}}
                <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ $item->galleries->count() ? url('storage/'.$item->galleries->first()->image) : '' }} ');">
                    <div class="travel-country">{{ $item->location}} </div>
                    <div class="travel-location">{{ $item->title}} </div>
                    <div class="travel-button mt-auto">
                        <a href="{{ route('detail', $item->slug)}} " class="btn btn-travel-details px-4">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
    </div>
</section>

<section class="section-networks">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Our Partners</h2>
                <p>Kami bekerja sama dengan berbagai perusahaan
                        <br> untuk kenyamanan perjalanan Anda. </p>
            </div>
            <div class="col-md-8 text-center">
                <img src="frontend/images/partners.png" alt="" class="img-partners">
            </div>

        </div>
    </div>
</section>

<section class="section-testimonial-heading" id="testimonialHeading">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2>They Are Loving Us</h2>
                <p>Moments were giving them
                    <br>
                    the best experience
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section section-testimonial-content" id="testimonialContent">
    <div class="container">
        <div class="section-popular-travel row justify-content-center">
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                    <div class="testimonial-content">
                        <img src="frontend/images/testimonial-1.png" alt="" class="mb-4 rouded-circle">
                        <h3 class="mb4">Hamdan Nurachid</h3>
                        <p class="testimonial">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur atque, neque placeat impedit pariatur deserunt laudantium nesciunt esse quia odit!
                        </p>
                    </div>
                    <hr>
                    <p class="trip-to mt-2">
                        Trip To Ubud, Bali Indonesia
                    </p>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                    <div class="testimonial-content">
                        <img src="frontend/images/testimonial-2.png" alt="" class="mb-4 rouded-circle">
                        <h3 class="mb4">Hamdan Nurachid</h3>
                        <p class="testimonial">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur atque, neque placeat impedit pariatur deserunt laudantium nesciunt esse quia odit!
                        </p>
                    </div>
                    <hr>
                    <p class="trip-to mt-2">
                        Trip To Borobudur, Indonesia
                    </p>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                    <div class="testimonial-content">
                        <img src="frontend/images/testimonial-3.png" alt="" class="mb-4 rouded-circle">
                        <h3 class="mb4">Marius Ciocirlan</h3>
                        <p class="testimonial">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente nostrum iusto enim ab aut id quas itaque minima? Fugiat deserunt error porro facilis magni? Facilis sunt sed repellendus beatae itaque?
                        </p>
                    </div>
                    <hr>
                    <p class="trip-to mt-2">
                        Trip To Dubai
                    </p>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-12 text-center">
                <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">I Need Help</a>
                <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">Get Started</a>
            </div>
        </div>
    </div>
</section>
@endsection
