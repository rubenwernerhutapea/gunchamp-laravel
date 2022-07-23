@extends('layouts.dashboard')

@section('name')
  Lomba Saya
@endsection

@section('content')
<!-- Page wrapper -->
<div class="page-wrapper">
  <!-- Bread crumb and right sidebar toggle -->
  <div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Lomba Saya</h4>
      </div>
    </div>
  </div>
  <!-- End Bread crumb and right sidebar toggle -->
<!-- Container fluid -->
<div class="container-fluid">
  <!-- Start Page Content -->
  <div class="row">
    <div class="col-sm-12">
      <div class="white-box">
        <div class="d-flex justify-content-between mb-3">
          <h3 class="box-title">Daftar Perlombaan Saya</h3>
          <a href="{{ route('tambah-lomba') }}" class="btn btn-primary align-self-center">+ Tambah Lomba</a>
        </div>

        <div class="table-responsive">
          <table class="table text-wrap">
            <thead>
              <tr>
                <th width="10%" class="border-top-0">No</th>
                <th width="20%" class="border-top-0">Nama Lomba</th>
                <th width="10%" class="border-top-0">Periode Pendaftaran</th>
                <th width="10%" class="border-top-0">Biaya Pendaftaran</th>
                <th width="10%" class="border-top-0">Link Pendaftaran</th>
                <th width="10%" class="border-top-0">Target Peserta</th>
                <th width="10%" class="border-top-0">Social Media</th>
                <th width="10%" class="border-top-0">Poster</th>
                <th width="10%" class="border-top-0">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=1; ?>
              @foreach ($lomba as $lomb)
                <tr>
                  <td><?= $i; ?></td>
                  <td width="10%">{{ $lomb->name }}</td>
                  <td>{{ $lomb->registration_period }}</td>
                  <td>{{ $lomb->registration_fee }}</td>
                  <td>{{ $lomb->registration_link }}</td>
                  <td>{{ $lomb->categories }}</td>
                  <td>{{ $lomb->sosmed }}</td>
                  <td><img src="{{ Storage::url($lomb->poster) }}" height="100px" width="100px" alt=""></td>
                  <td>
                    <a href="{{ route('edit-lomba', $lomb->id) }}"><i class="bi bi-pencil-square text-primary"></i></a>
                    <a href="{{ route('dashboard-lomba-delete', $lomb->id) }}"><i class="bi bi-trash text-danger"></i></a>
                  </td>
                </tr>
                <?php $i++; ?>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Content -->
</div>
<!-- End Container fluid  -->
</div>
@endsection