@extends('layouts.app')


@section('title')
SIPIT | Detail Journal
@endsection


@section('css')
<link href="{{ asset('css/journal/detail-journal.css') }}" rel="stylesheet">
@endsection


@section('content')
<!-- Breadcrumbs -->
<div class="container mt-5 mb-4">
    <nav>
        <ol class="breadcrumb bg-transparent pl-0">
            <li class="breadcrumb-item"><a href="/journal">Journal</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ ucwords($jurnal->title) }}</li>
        </ol>
    </nav>
</div>

<!-- Single Product -->
<section class="single-product">
<div class="container">
    <div class="row">
        <div class="col-md-3 col-lg-3 figure">
            <img src="{{ asset($jurnal->photo) }}" height="400px" class="figure-img">
        </div>

        <div class="col-md-9 col-lg-9">
            <h3>{{ ucwords($jurnal->title) }}</h3>
            <p>Score : {{ strtoupper($jurnal->score) }}</p>
            <br>
            <div class="designed-by">
            <h5>Publisher</h5>
            <div class="row">
                <div class="col">
                    <h4>{{ $jurnal->publisher }}</h4>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</section>


<!-- Product Description & Review -->
<section class="product-description p-5">
<div class="container">
    <div class="row">
    <div class="col-lg-9">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab"
                aria-controls="description" aria-selected="true">Journal Description</a>
            </li>
        </ul>
        <div class="tab-content p-3 py-5" id="myTabContent">
            <div class="tab-pane fade show active product-review" id="description" role="tabpanel"
                aria-labelledby="description-tab">
                <div>
                    <div class="containerm-0 p-0">
                        <div class="row">
                            <div class="w-100 d-flex mb-2">
                                <div class="col-md-2">
                                    Title
                                </div>
                                <div class="col-md-10">
                                    : {{ ucwords($jurnal->title) }}
                                </div>
                            </div>

                            <div class="w-100 d-flex mb-2">
                                <div class="col-md-2">
                                    Score
                                </div>
                                <div class="col-md-10">
                                    : {{ ucwords($jurnal->score) }}
                                </div>
                            </div>


                            <div class="w-100 d-flex mb-2">
                                <div class="col-md-2">
                                    Publisher
                                </div>
                                <div class="col-md-10">
                                    : {{ ucwords($jurnal->publisher) }}
                                </div>
                            </div>

                            <div class="w-100 d-flex mb-2">
                                <div class="col-md-2">
                                    Category
                                </div>
                                <div class="col-md-10">
                                    : {{ $jurnal->area }}
                                </div>
                            </div>

                            <div class="w-100 d-flex mb-2">
                                <div class="col-md-2">
                                    Website
                                </div>
                                <div class="col-md-10">
                                    :  <a target="blank" class="text-decoration-none" href="{{ $jurnal->link_website }}">{{ $jurnal->link_website }}</a>
                                </div>
                            </div>

                            <div class="w-100 d-flex mb-2">
                                <div class="col-md-2">
                                    Location
                                </div>
                                <div class="col-md-10">
                                    : {{ $jurnal->address }}
                                </div>
                            </div>

                            <div class="w-100 d-flex mb-2">
                                <div class="col-md-2">
                                    District
                                </div>
                                <div class="col-md-10">
                                    : {{ $jurnal->district }}
                                </div>
                            </div>

                            <div class="w-100 d-flex mb-2">
                                <div class="col-md-2">
                                    Phone
                                </div>
                                <div class="col-md-10">
                                    : {{ $jurnal->phone }}
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
        <h3>Similar Journal</h3>
    </div>
    </div>

    <div class="row">
    <div class="col-sm-4">
        <div>
        <img src="/img/uploaded/citations3.jfif" class="figure-img img-fluid">
        <figcaption class="figure-caption">
            <div class="row">
            <div class="col">
                <h4>Journal ABCD</h4>
                <p>Writer</p>
            </div>

            </div>
        </figcaption>
        </div>
    </div>
    <div class="col-sm-4">
        <div>
        <img src="/img/uploaded/citations4.jfif" class="figure-img img-fluid">
        <figcaption class="figure-caption">
            <div class="row">
            <div class="col">
                <h4>Journal ABCD</h4>
                <p>Writer</p>
            </div>
            </div>
        </figcaption>
        </div>
    </div>
    <div class="col-sm-4">
        <div>
        <img src="/img/uploaded/citations5.jfif" class="figure-img img-fluid">
        <figcaption class="figure-caption">
            <div class="row">
            <div class="col">
                <h4>Journal ABCD</h4>
                <p>Writer</p>
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
