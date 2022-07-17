@extends('layouts.dashboard')

@section('name')
  Profile
@endsection

@section('content')
<!-- Page wrapper -->
<div class="page-wrapper">
<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb bg-white">
  <div class="row align-items-center">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
      <h4 class="page-title">Profile</h4>
    </div>
  </div>
</div>
<!-- End Bread crumb and right sidebar toggle -->
<!-- Container fluid  -->
<div class="container-fluid">
  <!-- Start Page Content -->

  <!-- Row -->
  <div class="row">
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-12">
      <div class="card">
        <div class="card-body">
          <form class="form-horizontal form-material" action="{{ route('dashboard-profile-redirect', 'dashboard-profile') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
              <label for="name" class="col-md-12 p-0">Nama Instansi</label>
              <div class="col-md-12 border-bottom p-0">
                <input type="text" placeholder="Technofair 9.0" class="form-control p-0 border-0" id="name" name="name" value="{{ $user->name }}" />
              </div>
            </div>

            <div class="form-group mb-4">
              <label for="email" class="col-md-12 p-0">Email</label>
              <div class="col-md-12 border-bottom p-0">
                <input type="email" placeholder="technofair@gmail.com" class="form-control p-0 border-0" id="email" name="email" value="{{ $user->email }}" />
              </div>
            </div>

            {{-- <div class="form-group mb-4">
              <label for="password" class="col-md-12 p-0">Password</label>
              <div class="col-md-12 border-bottom p-0">
                <input type="password" class="form-control p-0 border-0" id="password" name="password" />
              </div>
            </div> --}}

            <div class="form-group mb-4">
              <label for="telepon" class="col-md-12 p-0">Nomor Telepon</label>
              <div class="col-md-12 border-bottom p-0">
                <input type="text" placeholder="123 456 7890" class="form-control p-0 border-0" id="telepon"  name="telepon" value="{{ $user->telepon }}"/>
              </div>
            </div>

            <div class="form-group mb-4">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">Update Profil</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="col-lg-8 col-xlg-9 col-md-12">
      <div class="card">
        <div class="card-body">
          @if (session('success'))
            <div class="aler alert-success" role="alert">
              {{ session('success') }}
            </div>
          @endif
          <form class="form-horizontal form-material" action="{{ route('dashboard-profile-redirect-password', 'dashboard-profile') }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="form-group mb-4">
              <label for="old_password" class="col-md-12 p-0">Old Password</label>
              <div class="col-md-12 border-bottom p-0">
                <input type="password" class="form-control p-0 border-0" id="old_password" name="old_password" />
                @error('old_password')
                    <div class="text-danger mt2">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <div class="form-group mb-4">
              <label for="password" class="col-md-12 p-0">New Password</label>
              <div class="col-md-12 border-bottom p-0">
                <input type="password" class="form-control p-0 border-0" id="password" name="password" />
                @error('password')
                    <div class="text-danger mt2">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <div class="form-group mb-4">
              <label for="password_confirmation" class="col-md-12 p-0">Confirm Password</label>
              <div class="col-md-12 border-bottom p-0">
                <input type="password" class="form-control p-0 border-0" id="password_confirmation" name="password_confirmation" />
              </div>
            </div>

            <div class="form-group mb-4">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">Update Password</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Column -->
  </div>
  <!-- Row -->
  <!-- End page content -->
</div>
<!-- End Container fluid -->
</div>
@endsection