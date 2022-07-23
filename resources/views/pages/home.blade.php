@extends('layouts.app')

@section('name')
  Gunchamp | Gunadarma Champions
@endsection

@section('content')
  <!-- JUMBOTRON -->
<div class="jumbotron jumbotron-fluid main">
  <div class="container text-center">
    <h2>SELAMAT DATANG</h2>
    <h1 class="display-3 font-weight-bold">GUNADARMA</h1>
    <h1 class="display-3 font-weight-bold">CHAMPIONSHIP</h1>
    <h4 class="font-italic">Are you ready to be a champion?</h4>
  </div>
</div>
<!-- AKHIR JUMBOTRON -->

<!-- ABOUT -->
<section class="about" id="about">
  <div class="container pt-5 pb-5">
    <div class="row mb-4">
      <div class="col text-center">
        <img src="{{ url('/frontend/img/logo-title.png') }}"/>
      </div>
    </div>

    <!-- dikasih justify-conten-center biar kontennya tetep ada di tengah2 walau kolom nya tidak full 12 -->
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <p>
          Pariwisata di Daerah Istimewa Yogyakarta selalu meningkat setiap tahunnya. Yogya menjadi magnet wisatawan manca dan domestik untuk selalu kangen berlibur ke Yogyakarta. Ada banyak alasan mengapa wisatawan menghabiskan waktu
          liburan di Yogya (Biaya murah, Transportasi mudah, Kuliner enak dan murah, Surganya spot wisata alam, Wisata pantai, Budaya, Education, Sejarah dan masih banyak lagi) ditambah banyak sekali tempat-tempat wisata Yogya terbaru
          2021 yang sedang hits sekarang ini. <br />
          <br />
          Dengan begitu, Explore YOGYA mengajak traveler untuk mengunjungi beberapa tempat wisata yang berada di Yogyakarta. Are you ready to explore Yogyakarta?
        </p>
      </div>
    </div>
  </div>
</section>
<!-- AKHIR ABOUT -->

<!-- BANNER -->
<div class="jumbotron jumbotron-fluid banner">
  <div class="container text-center">
    <h2 class="font-weight-bold text">Apakah kamu penyelenggara lomba?</h2>
    <h3 class="font-italic text">Promosikan perlombaanmu sekarang!</h3>
    <a class="btn btn-warning btn-lg tombol mt-4" href="{{ route('register') }}" role="button">Promosi Sekarang</a>
  </div>
</div>
<!-- AKHIR BANNER -->
@endsection