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
          <form class="form-horizontal form-material">
            <div class="form-group mb-4">
              <label for="name-user" class="col-md-12 p-0">Nama Instansi</label>
              <div class="col-md-12 border-bottom p-0">
                <input type="text" placeholder="Technofair 9.0" class="form-control p-0 border-0" id="name-user" />
              </div>
            </div>

            <div class="form-group mb-4">
              <label for="email" class="col-md-12 p-0">Email</label>
              <div class="col-md-12 border-bottom p-0">
                <input type="email" placeholder="technofair@gmail.com" class="form-control p-0 border-0" id="email" />
              </div>
            </div>

            <div class="form-group mb-4">
              <label for="password" class="col-md-12 p-0">Password</label>
              <div class="col-md-12 border-bottom p-0">
                <input type="password" value="password" class="form-control p-0 border-0" id="password" />
              </div>
            </div>

            <div class="form-group mb-4">
              <label for="phone-num" class="col-md-12 p-0">Nomor Telepon</label>
              <div class="col-md-12 border-bottom p-0">
                <input type="text" placeholder="123 456 7890" class="form-control p-0 border-0" id="phone-num" />
              </div>
            </div>

            <div class="form-group mb-4">
              <div class="col-sm-12">
                <button class="btn btn-primary">Update Profil</button>
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