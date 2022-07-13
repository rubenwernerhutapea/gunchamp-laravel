@extends('layouts.dashboard')

@section('name')
  Dashboard
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
          <a href="{{ route('tambah-lomba') }}" class="btn btn-primary">Tambah Lomba</a>
        </div>

        <div class="table-responsive">
          <table class="table text-wrap">
            <thead>
              <tr>
                <th width="10%" class="border-top-0">No</th>
                <th width="20%" class="border-top-0">Nama Lomba</th>
                <th width="20%" class="border-top-0">Periode Pendaftaran</th>
                <th width="10%" class="border-top-0">Biaya Pendaftaran</th>
                <th width="10%" class="border-top-0">Link Pendaftaran</th>
                <th width="10%" class="border-top-0">Target Peserta</th>
                <th width="10%" class="border-top-0">Social Media</th>
                <th width="10%" class="border-top-0">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td width="10%">Capture The Flag Acara yang sangat menarik waw</td>
                <td>25 April - 12 Mei 2022</td>
                <td>25.000</td>
                <td>www.technofair.id</td>
                <td>Umum</td>
                <td>Instagram: @technofair</td>
                <td>
                  <a href=""><i class="bi bi-pencil-square text-primary"></i></a>
                  <a href=""><i class="bi bi-trash text-danger"></i></a>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td width="10%">Smart FIKTI</td>
                <td>25 April - 12 Mei 2022</td>
                <td>15.000</td>
                <td>www.technofair.id</td>
                <td>FIKTI</td>
                <td>Instagram: @technofair</td>
                <td>
                  <a href=""><i class="bi bi-pencil-square text-primary"></i></a>
                  <a href=""><i class="bi bi-trash text-danger"></i></a>
                </td>
              </tr>
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