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
        <img src="{{ url('/img/logo-title.png') }}"/>
      </div>
    </div>

    <!-- dikasih justify-conten-center biar kontennya tetep ada di tengah2 walau kolom nya tidak full 12 -->
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <p>
          Berbagai macam acara perlombaan selalu diadakan di Universitas Gunadarma setiap tahunnya. Umumnya perlombaan tersebut diselenggarakan oleh Universitas, BEM (Badan Eksekutif Mahasiswa) di setiap fakultas, HIMA (Himpunan Mahasiswa) di setiap jurusan, UKM (Unit Kegiatan  Mahasiswa) atau komunitas, yang dimana para penyelenggara tersebut memiliki tujuan yang sama yaitu menjadi wadah pengembangan diri dan memaksimalkan potensi mahasiswa. Mahasiswa dapat merasakan berbagai manfaat dari mengikuti perlombaan, salah satunya adalah dapat menguji dan mengetahui sudah sejauh mana perkembangan potensi yang dimiliki. <br />
          <br />
          Dengan begitu, Gunchamp (Gunadarma Champhionship) menyediakan informasi lengkap mengenai perlombaan di Universitas Gunadarma untuk mempermudah para champions yang sedang mencari informasi perlombaan di Universitas Gunadarma. Are you ready to be a champion?
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