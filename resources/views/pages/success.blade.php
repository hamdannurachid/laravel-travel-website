@extends('layouts.success')
@section('title','Checkout Success')

@section('content')
<main>
    <div class="section-success d-flex align-item-center">
        <div class="col text-center">
            <img src="{{ url ('frontend/images/ic_mail.png')}}" alt="" class="mt-5">
            <h1>Yay! Success</h1>
            <p>Please check your email address</p>
            <a href="{{ route('home')}} " class="btn btn-home-page mt-3 px-5">
                Home Page
            </a>
        </div>
    </div>
</main>
@endsection

