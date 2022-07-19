@extends('layouts.admin')

@section('name')
  User
@endsection

@section('content')
<!-- Page wrapper -->
<div class="page-wrapper">
  <!-- Bread crumb and right sidebar toggle -->
  <div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Create User</h4>
      </div>
    </div>
  </div>
  <!-- End Bread crumb and right sidebar toggle -->

  <!-- Container fluid  -->
  <div class="container-fluid">
    <div class="row">
      <!-- .col -->
      <div class="col-12">
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" name="name" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" name="email" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Telepon</label>
                      <input type="text" class="form-control" name="telepon" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" name="password" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Roles</label>
                      <select name="roles" required class="form-control">
                          <option value="ADMIN">Admin</option>
                          <option value="USER">User</option>
                        </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col text-right">
                    <button
                      type="submit"
                      class="btn btn-info px-5"
                    >
                      Simpan
                    </button>
                  </div>
              </div>
            </div>
          </form>
        </div>
    </div>
  </div>
  <!-- End Container Fluid -->
</div>
@endsection