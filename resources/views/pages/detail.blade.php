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
            <h1 class="font-weight-bold">{{ $lomba->name }}</h1>
            <p>{{ $lomba->user->name }}</p>
            <img src="{{ Storage::url($lomba->poster) }}" class="xzoom" id="xzoom-default" xoriginal="{{ Storage::url($lomba->poster) }}" />
            <h2 class="font-weight-bold">Deskripsi</h2>
            <p>
              {!! $lomba->description !!}
            </p>
          </div>
        </div>

        <!-- side card -->
        <div class="col-lg-5">
          <div class="card card-details card-right">
            <h2>Informasi Terkait Lomba</h2>
            <table class="trip-informations">
              <tr>
                <th width="50%">Periode Pendaftaran</th>
                <td width="50%" class="text-right">{{ $lomba->registration_period }}</td>
              </tr>
              <tr>
                <th width="50%">Biaya Pendaftaran</th>
                <td width="50%" class="text-right">{{ $lomba->registration_fee }}</td>
              </tr>
              <tr>
                <th width="50%">Link Pendaftaran</th>
                <td width="50%" class="text-right">{{ $lomba->registration_link }}</td>
              </tr>
              <tr>
                <th width="50%">Taget Peserta</th>
                <td width="50%" class="text-right">{{ $lomba->categories }}</td>
              </tr>
              <tr>
                <th width="50%">Narahubung</th>
                <td width="50%" class="text-right">{{ $lomba->user->telepon }}</td>
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