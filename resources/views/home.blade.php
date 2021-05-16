@extends('layouts.app')


@section('title')
SIPIT | Home
@endsection


@section('content')
<!-- awal carousel -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="ratatengah">
      <div class="carousel-item active">
        <div class="row">
          <div class="col ">
            <h1>Sistem Monitoring</h1>
            <p>Produksi yang tinggi merupakan tujuan dari budidaya udang secara intensif untuk
              memenuhi kebutuhan pasar akan udang. Pada penelitian ini membahas rancang bangun
              sebuah sistem untuk pemantauan kualitas air yang dapat memberikan informasi tentang ...</p>
            <a href="" class="btn btn-warning">view</a>
          </div>
          <div class="col">
            <img src="img/cover1.jpg">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col ">
            <h1>Sistem Monitoring</h1>
            <p>Produksi yang tinggi merupakan tujuan dari budidaya udang secara intensif untuk
              memenuhi kebutuhan pasar akan udang. Pada penelitian ini membahas rancang bangun
              sebuah sistem untuk pemantauan kualitas air yang dapat memberikan informasi tentang ...</p>
            <a href="" class="btn btn-warning">view</a>
          </div>
          <div class="col">
            <img src="img/cover2.jpg">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col ">
            <h1>Sistem Monitoring</h1>
            <p>Produksi yang tinggi merupakan tujuan dari budidaya udang secara intensif untuk
              memenuhi kebutuhan pasar akan udang. Pada penelitian ini membahas rancang bangun
              sebuah sistem untuk pemantauan kualitas air yang dapat memberikan informasi tentang ...</p>
            <a href="" class="btn btn-warning">view</a>
          </div>
          <div class="col">
            <img src="img/cover3.jpg">
          </div>
        </div>
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
  </div>
  <!-- akhir carousel -->

  <!-- Features -->

  <section class="features mt-5">
    <div class="container">
      <div class="row mb-3 mt-3">
        <div class="col">
          <div class="h3">Last Updated</div>
        </div>
      </div>
      <div class="row">
        <div class="col-3 text-center">
          <figure class="figure">
            <img src="img/features.png" class="figure-img img-fluid">
            <figcaption class="figure-caption text-center">
              Journal ABCD <br>
              Vol. 7
            </figcaption>
          </figure>
        </div>
        <div class="col-3 text-center">
          <figure class="figure">
            <img src="img/features.png" class="figure-img img-fluid">
            <figcaption class="figure-caption text-center">
              Journal ABCD <br>
              Vol. 7
            </figcaption>
          </figure>
        </div>
        <div class="col-3 text-center">
          <figure class="figure">
            <img src="img/features.png" class="figure-img img-fluid">
            <figcaption class="figure-caption text-center">
              Journal ABCD <br>
              Vol. 7
            </figcaption>
          </figure>
        </div>
        <div class="col-3 text-center">
          <figure class="figure">
            <img src="img/features.png" class="figure-img img-fluid">
            <figcaption class="figure-caption text-center">
              Journal ABCD <br>
              Vol. 7
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
  </section>

  <!-- Akhir Features-->

  <!-- Writer -->

  <section class="features mt-5 mb-5">
    <div class="container">
      <div class="row mb-3 mt-3">
        <div class="col">
          <div class="h3">Our Writer</div>
        </div>
      </div>
      <div class="row">
        <div class="col-3 text-center">
          <figure class="figure">
            <img src="img/dohun1.png" class="figure-img img-fluid">
            <figcaption class="figure-caption text-center">
              Journal ABCD <br>
              Vol. 7
            </figcaption>
          </figure>
        </div>
        <div class="col-3 text-center">
          <figure class="figure">
            <img src="img/dohun1.png" class="figure-img img-fluid">
            <figcaption class="figure-caption text-center">
              Journal ABCD <br>
              Vol. 7
            </figcaption>
          </figure>
        </div>
        <div class="col-3 text-center">
          <figure class="figure">
            <img src="img/dohun1.png" class="figure-img img-fluid">
            <figcaption class="figure-caption text-center">
              Journal ABCD <br>
              Vol. 7
            </figcaption>
          </figure>
        </div>
        <div class="col-3 text-center">
          <figure class="figure">
            <img src="img/dohun1.png" class="figure-img img-fluid">
            <figcaption class="figure-caption text-center">
              Journal ABCD <br>
              Vol. 7
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
  </section>

  <!-- Akhir Writer -->
@endsection
