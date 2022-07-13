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
        <h4 class="page-title">Tambah Lomba</h4>
      </div>
    </div>
  </div>
  <!-- End Bread crumb and right sidebar toggle -->
<!-- Container fluid  -->
<div class="container-fluid">
  <!-- Start Page Content -->
  <div class="row white-box">
    <form action="">
      <div class="form-group row">
        <label for="name-comp" class="col-sm-2 col-form-label">Nama Lomba</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name-comp" placeholder="Masukkan nama lomba..." />
        </div>
      </div>

      <div class="form-group row">
        <label for="regist-period" class="col-sm-2 col-form-label pt-0">Periode Pendaftaran</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="regist-period" placeholder="Masukkan periode tanggal pendaftaran..." required="" />
        </div>
      </div>

      <div class="form-group row">
        <label for="regist-fee" class="col-sm-2 col-form-label">Biaya Pendaftaran</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="regist-fee" placeholder="Masukkan biaya pendaftaran..." required="" />
          <small id="registFee" class="form-text text-muted">*Isi dengan angka '0' jika tidak ada biaya pendaftaran.</small>
        </div>
      </div>

      <div class="form-group row">
        <label for="regist-link" class="col-sm-2 col-form-label">Link Pendaftaran</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="regist-link" placeholder="Masukkan link pendaftaran..." required="" />
          <small id="registLink" class="form-text text-muted">*Harap gunakan link yang sudah dipendekkan.</small>
        </div>
      </div>

      <div class="form-group row">
        <label for="categories" class="col-sm-2 col-form-label">Target Peserta</label>
        <div class="col-sm-10">
          <select class="form-select" id="categories">
            <option selected>Choose...</option>
            <option value="1">FIKTI</option>
            <option value="2">FTI</option>
            <option value="3">FE</option>
            <option value="4">FTSP</option>
            <option value="5">FPSI</option>
            <option value="6">FSB</option>
            <option value="7">FIKOM</option>
            <option value="8">FK</option>
            <option value="9">D3BK</option>
            <option value="10">Mahasiswa Gunadarma</option>
            <option value="11">Umum</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="social-media" class="col-sm-2 col-form-label">Social Media</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="social-media" placeholder="Masukkan social media..." required="" />
        </div>
      </div>

      <div class="form-group row">
        <label for="poster" class="col-sm-2 col-form-label">Poster Acara</label>
        <div class="col-sm-10">
          <input type="file" class="form-control-file" id="poster" required="" />
        </div>
      </div>

      <div class="form-group row">
        <label for="desc" class="col-sm-2 col-form-label pt-0">Deskripsi Singkat Lomba</label>
        <div class="col-sm-10">
          <textarea class="form-control" id="desc" rows="3" placeholder="Deskripsikan secara singkat mengenai lombamu..."></textarea>
        </div>
      </div>

      <div class="row">
        <button type="submit" class="btn btn-primary col-sm-12">Submit</button>
      </div>
    </form>
  </div>
  <!-- End PAge Content -->
  <!-- Right sidebar -->
  <!-- .right-sidebar -->
  <!-- End Right sidebar -->
</div>
<!-- End Container fluid  -->
</div>
@endsection