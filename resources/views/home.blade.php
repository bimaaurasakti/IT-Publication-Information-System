@extends('layouts.app')


@section('title')
SIPIT | Home
@endsection


@section('content')
<!-- awal carousel -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="ratatengah">
            @foreach ($journalTopImpact as $key => $journal)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <div class="row">
                        <div class="col">
                            <h1>{{ $journal->title }}</h1>
                            <p>Produksi yang tinggi merupakan tujuan dari budidaya udang secara intensif untuk
                            memenuhi kebutuhan pasar akan udang. Pada penelitian ini membahas rancang bangun
                            sebuah sistem untuk pemantauan kualitas air yang dapat memberikan informasi tentang ...</p>
                            <a href="" class="btn btn-warning">view</a>
                        </div>
                        <div class="col">
                            <img class="carousel-image" src="{{ asset($journal->photo) }}">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- akhir carousel -->


<!-- Features -->
<section class="features mt-5">
    <div class="container">
        <div class="row d-flex justify-content-center mb-5">
            <div class="content-page-title">
                <h1>Latest Update</h1>
            </div>
        </div>

        <div class="row">
            @foreach ($journalLatestUpdate as $journal)
                <div class="col-3 text-center">
                    <figure class="figure">
                        <img src="{{ asset($journal->photo) }}" class="figure-img img-fluid" >
                        <div class="d-flex justify-content-center">
                            <figcaption class="figure-width figure-caption text-center m-0">
                                {{ $journal->title }}
                            </figcaption>
                        </div>
                    </figure>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Akhir Features-->
@endsection
