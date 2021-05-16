@extends('layouts.app')


@section('title')
SIPIT | Conference
@endsection


@section('css')
<link href="{{ asset('css/conference/detail-conference.css') }}" rel="stylesheet" type="text/css">
@endsection


@section('content')
<div class="container mt-5 mb-4">
    <nav>
        <ol class="breadcrumb bg-transparent pl-0">
            <li class="breadcrumb-item"><a href="/conference">Conference</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ ucwords($conference->name) }}</li>
        </ol>
    </nav>
</div>


<!-- Product Description & Review -->
<section class="product-description p-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab"
                        aria-controls="description" aria-selected="true">Conference Description</a>
                    </li>
                </ul>

                <div class="tab-content p-3 py-5" id="myTabContent">
                    <div class="tab-pane fade show active product-review" id="description" role="tabpanel"
                        aria-labelledby="description-tab">
                        <div class="">
                            <div class="containerm-0 p-0">
                                <div class="row">
                                    <div class="w-100 d-flex mb-2">
                                        <div class="col-md-2">
                                            Conference
                                        </div>
                                        <div class="col-md-10">
                                            : {{ $conference->name }}
                                        </div>
                                    </div>

                                    <div class="w-100 d-flex mb-2">
                                        <div class="col-md-2">
                                            Name
                                        </div>
                                        <div class="col-md-10">
                                            : {{ $conference->long_name }}
                                        </div>
                                    </div>

                                    <div class="w-100 d-flex mb-2">
                                        <div class="col-md-2">
                                            Area
                                        </div>
                                        <div class="col-md-10">
                                            : {{ $conference->area }}
                                        </div>
                                    </div>

                                    <div class="w-100 d-flex mb-2">
                                        <div class="col-md-2">
                                            Website
                                        </div>
                                        <div class="col-md-10">
                                            :  <a href="{{ $conference->link_website }}">{{ $conference->link_website }}</a>
                                        </div>
                                    </div>

                                    <div class="w-100 d-flex mb-2">
                                        <div class="col-md-2">
                                            Location
                                        </div>
                                        <div class="col-md-10">
                                            : {{ $conference->location }}
                                        </div>
                                    </div>

                                    <div class="w-100 d-flex mb-2">
                                        <div class="col-md-2">
                                            Date
                                        </div>
                                        <div class="col-md-10">
                                            : {{ date('d-M-Y', strtotime($conference->date)) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Product Description & Review -->

<!-- Similar Product -->
<section class="similar-product">
    <div class="container">
        <div class="row mb-3">
            <div class="col">
                <h3>Similar Conference</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <div>
                    <img src="/img/conference1.webp" class="figure-img img-fluid" width="375px" style="max-height: 220px;">
                    <figcaption class="figure-caption">
                        <div class="row">
                            <div class="col">
                                <h4>Conference ABCD</h4>
                                <p>Speaker</p>
                            </div>
                        </div>
                    </figcaption>
                </div>
            </div>

            <div class="col-sm-4">
                <div>
                    <img src="/img/conference2.jpeg" class="figure-img img-fluid" width="375px" style="max-height: 220px;">
                    <figcaption class="figure-caption">
                        <div class="row">
                            <div class="col">
                                <h4>Conference ABCD</h4>
                                <p>Speaker</p>
                            </div>
                        </div>
                    </figcaption>
                </div>
            </div>

            <div class="col-sm-4">
                <div>
                    <img src="/img/conference3.png" class="figure-img img-fluid" width="375px" style="max-height: 220px;">
                    <figcaption class="figure-caption">
                        <div class="row">
                            <div class="col">
                                <h4>Conference ABCD</h4>
                                <p>Speaker</p>
                            </div>
                        </div>
                    </figcaption>
                </div=>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Similar Product -->

@endsection
