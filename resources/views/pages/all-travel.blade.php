@extends('layouts.app')
@section('title','Paket Travel')

@section('content')
<main>
    <section class="section-details-header">
    </section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Paket Travel
                            </li>
                            <li class="breadcrumb-item active">
                                Semua
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 pl-lg-0" style="background-color:#fff;border-radius:11px">

                    <section class="section-popular-content mt-4" id="popularContent">
                        <h1 class="text-center">Paket Travel Tersedia</h1>
                        <hr>
                        <div class="container">
                            <div class="section-popular-travel row">
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
                        </div>
                    </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url ('frontend/libraries/xzoom/xzoom.css')}} ">
@endpush

@push('addon-script')
<script src="{{ url ('frontend/libraries/xzoom/xzoom.min.js')}} "></script>

    <script>
        $(document).ready(function(){
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 450,
                title: false,
                titn: '#333',
                xoffset: 15
            });
        });

    </script>
@endpush
