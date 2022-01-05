@extends('layouts.app')

@section('title')
SIPIT | About
@endsection


@section('css')
<link href="{{ asset('css/about.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
<section>
    <div class="about d-flex justify-content-center">
        <div class="box">
            <div class="d-flex justify-content-center">
                <h1>About</h1>
            </div>

            <div class="content">
                <p>       Information System Publication Information System Website for IT Sector (SIPIT) is a national journal created by the B4 RPL/WPPL group, and published by the Department of Informatics EEPIS. The SIPIT website itself contains the best quality national journals, and SIPIT itself also lists the rankings of the journals presented. So the user can find out the ranking or value of each journal. And on the SIPIT web, it is dedicated to journals in the IT field category, so users who really need journal references for scientific works or thesis can find references more easily.
                <br>Not only presenting various journals, the SIP web also presents conferences or seminars that are also IT for the IT field. With this conference, users can better understand the content or material discussed at the conference. So users can get new insights about the material being explained</p>
            </div>
        </div>
    </div>
</section>
<div class="background">
    <div class="backgroundcontact d-flex justify-content-center row">
        <div class="contactbox">
            <div class="d-flex justify-content-center mb-3">
                <h1>Contact Us</h1>
            </div>
                <div class="row justify-content-center text-center">
                    <div class="card d-flex m-3 rounded-lg" style="width: 18rem;">
                        <div class="card-body">
                            <img src="{{ asset('img/about/location.png') }}" height="73px" class="figure-img">
                        <h5 class="card-title">Our Address</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Jl. Raya ITS, Keputih, Kec. Sukolilo, Kota SBY, Jawa Timur 60111</h6>
                        </div>
                    </div>
                    <div class="card m-3 rounded-lg" style="width: 18rem;">
                        <div class="card-body">
                            <img src="{{ asset('img/about/email.png') }}" height="73px" class="figure-img">
                        <h5 class="card-title">Our E-mail</h5>
                        <h6 class="card-subtitle mb-2 text-muted">bbbb4321098765@gmail.com</h6>
                        </div>
                    </div>
                    <div class="card  m-3 rounded-lg" style="width: 18rem;">
                        <div class="card-body">
                            <img src="{{ asset('img/about/phone.png') }}" height="73px" class="figure-img">
                        <h5 class="card-title">Call Us</h5>
                        <h6 class="card-subtitle mb-2 text-muted">089687835828</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="backgroundfeedback d-flex justify-content-center row">
        <div class="feedbackbox col-md-4">
            <div class="d-flex justify-content-center mb-3">
                <h1>Feedback</h1>
            </div>
                <form action="{{ route('about.sendFeedback') }}" method="post" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" placeholder="Your Name">
                    </div>
                    @error('name')
                        @include('admin.partials.error-message')
                    @enderror
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="text" name="email" value="{{ old('email') }}" class="form-control" id="email" placeholder="Your Email">
                    </div>
                    @error('email')
                        @include('admin.partials.error-message')
                    @enderror
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" name="subject" value="{{ old('subject') }}" class="form-control" id="subject" placeholder="Subject">
                    </div>
                    @error('subject')
                        @include('admin.partials.error-message')
                    @enderror
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" value="{{ old('message') }}" name="message" id="message" rows="3" placeholder="Message"></textarea>
                    </div>
                    @error('message')
                        @include('admin.partials.error-message')
                    @enderror
                    <div class="d-flex mt-4">
                        <button style="height : 36px;" name="add" type="submit" class="btn btn-success mr-2">Send</button>
                    </div>
                </form>
                {{-- @include('admin.layouts.alert-journal') --}}
                @include('sweetalert::alert')
            </div>
        </div>
    </div>
</div>

@endsection
