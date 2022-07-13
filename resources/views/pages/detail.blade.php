@extends('layouts.app-details')

@section('name')
  Gunchamp
@endsection

@section('content')
<!-- DETAIL -->
<main>
  <!-- header -->
  <section class="section-details-header"></section>

  <!-- konten -->
  <section class="section-details-content">
    <div class="container">
      <!-- card details -->
      <div class="row">
        <div class="col-lg-7 pl-lg-0">
          <div class="card card-details">
            <h1 class="font-weight-bold">Capture The Flag</h1>
            <p>Technofair 9.0</p>
            <img src="/img/lomba/poster2_workshop.jpg" class="xzoom" id="xzoom-default" xoriginal="img/lomba/poster2_workshop.jpg" />
            <h2 class="font-weight-bold">Deskripsi</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, nihil! Eveniet ea laboriosam vel, libero quod illum corrupti non adipisci necessitatibus modi dolorum ab pariatur distinctio porro aliquam id culpa!
            </p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa dolorem qui fugit iste eius earum praesentium, maxime assumenda suscipit consequuntur.</p>
          </div>
        </div>

        <!-- side card -->
        <div class="col-lg-5">
          <div class="card card-details card-right">
            <h2>Informasi Terkait Lomba</h2>
            <table class="trip-informations">
              <tr>
                <th width="50%">Periode Pendaftaran</th>
                <td width="50%" class="text-right">25 April - 12 Mei 2022</td>
              </tr>
              <tr>
                <th width="50%">Biaya Pendaftaran</th>
                <td width="50%" class="text-right">25.000</td>
              </tr>
              <tr>
                <th width="50%">Link Pendaftaran</th>
                <td width="50%" class="text-right">www.technofair.id</td>
              </tr>
              <tr>
                <th width="50%">Taget Peserta</th>
                <td width="50%" class="text-right">Umum</td>
              </tr>
              <tr>
                <th width="50%">Narahubung</th>
                <td width="50%" class="text-right">08123456789</td>
              </tr>
              <tr>
                <th width="50%">Social Media</th>
                <td width="50%" class="text-right">Instagram: @technofair</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<!-- AKHIR DETAIL -->
@endsection