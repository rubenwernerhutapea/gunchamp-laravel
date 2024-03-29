@extends('layouts.app-lomba')

@section('name')
Gunchamp | Lomba
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
      @forelse ($competitions as $competition)
        <div class="col-lg-3 col-lg-3 col-md-4 mb-3">
          <div class="card h-100">
            <img class="card-img-top" style="background-image: url('{{ Storage::url($competition->poster) }}')"/>
            <div class="card-body pb-0">
              <h5 class="font-weight-bold">{{ $competition->name }}</h5>
              <p class="mb-0">{{ $competition->user->name }}</p>
              <p class="mb-2">{{ $competition->registration_period  }}</p>
            </div>
            <div class="card-footer pt-0 pb-4">
              <a class="btn btn-outline-warning btn-sm mb-2 rounded-pill btn-category">{{ $competition->categories }}</a>
              <br />
              <a href="{{ route('detail', $competition->slug) }}" class="btn btn-warning btn-sm font-weight-bold rounded-pill">Info Selengkapnya <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
      @empty
          <div class="col-12 text-center-py-5">
            Tidak ada kompetisi tersedia
          </div>
      @endforelse
    </div>
    <div class="row">
      <div class="col-12 mt-4">
        {{ $competitions->links() }}
      </div>
    </div>
  </div>
</section>
<!-- AKHIR LOMBA -->
@endsection