@extends('layouts.app-lomba')

@section('name')
  Lomba
@endsection

@section('content')
<!-- JUMBOTRON -->
<div class="jumbotron jumbotron-fluid jumbotron-lomba">
  <div class="container text-center">
    <h1 class="display-4 font-weight-bold">Hello, Champions!</h1>
    <h4 class="pb-3">Sudah siap jadi pemenang?</h4>
    <hr />
  </div>
</div>
<!-- AKHIR JUMBOTRON -->

<!-- LOMBA -->
<section class="lomba mb-4" id="lomba">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-3 col-lg-3 col-md-4 mb-3">
        <div class="card h-100">
          <img class="card-img-top" />
          <div class="card-body pb-0">
            <h5 class="font-weight-bold">Capture The Flag Technofair 9.0 Acara menarik banget</h5>
            <p class="mb-0">Technofair 9.0</p>
            <p class="mb-2">Pendaftaran: 25 April - 12 Mei 2022</p>
          </div>
          <div class="card-footer pt-0 pb-4">
            <a class="btn btn-outline-warning btn-sm mb-2 rounded-pill btn-category">Umum</a>
            <br />
            <a href="#" class="btn btn-warning btn-sm font-weight-bold rounded-pill">Info Selengkapnya <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-lg-3 col-md-4 mb-3">
        <div class="card h-100">
          <img class="card-img-top" />
          <div class="card-body pb-0">
            <h5 class="font-weight-bold">Smart FIKTI</h5>
            <p class="mb-0">Technofair 9.0</p>
            <p class="mb-2">Pendaftaran: 25 April - 12 Mei 2022</p>
          </div>
          <div class="card-footer pt-0 pb-4">
            <a class="btn btn-outline-warning btn-sm mb-2 rounded-pill btn-category">Umum</a>
            <br />
            <a href="#" class="btn btn-warning btn-sm font-weight-bold rounded-pill">Info Selengkapnya <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-lg-3 col-md-4 mb-3">
        <div class="card h-100">
          <img class="card-img-top" />
          <div class="card-body pb-0">
            <h5 class="font-weight-bold">Capture The Flag</h5>
            <p class="mb-0">Technofair 9.0</p>
            <p class="mb-2">Pendaftaran: 25 April - 12 Mei 2022</p>
          </div>
          <div class="card-footer pt-0 pb-4">
            <a class="btn btn-outline-warning btn-sm mb-2 rounded-pill btn-category">Umum</a>
            <br />
            <a href="#" class="btn btn-warning btn-sm font-weight-bold rounded-pill">Info Selengkapnya <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-lg-3 col-md-4 mb-3">
        <div class="card h-100">
          <img class="card-img-top" />
          <div class="card-body pb-0">
            <h5 class="font-weight-bold">PUBG Mobile</h5>
            <p class="mb-0">Technofair 9.0</p>
            <p class="mb-2">Pendaftaran: 25 April - 12 Mei 2022</p>
          </div>
          <div class="card-footer pt-0 pb-4">
            <a class="btn btn-outline-warning btn-sm mb-2 rounded-pill btn-category">Umum</a>
            <br />
            <a href="#" class="btn btn-warning btn-sm font-weight-bold rounded-pill">Info Selengkapnya <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- AKHIR LOMBA -->
@endsection