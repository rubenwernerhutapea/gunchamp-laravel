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
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('dashboard-lomba-store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Nama Lomba</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lomba..." />
        </div>
      </div>

      <div class="form-group row">
        <label for="registration_period" class="col-sm-2 col-form-label pt-0">Periode Pendaftaran</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="registration_period" name="registration_period" placeholder="Masukkan periode tanggal pendaftaran..." required="" />
        </div>
      </div>

      <div class="form-group row">
        <label for="registration_fee" class="col-sm-2 col-form-label">Biaya Pendaftaran</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="registration_fee" name="registration_fee" placeholder="Masukkan biaya pendaftaran..." required="" />
          <small id="registFee" class="form-text text-muted">*Isi dengan angka '0' jika tidak ada biaya pendaftaran.</small>
        </div>
      </div>

      <div class="form-group row">
        <label for="registration_link" class="col-sm-2 col-form-label">Link Pendaftaran</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="registration_link" name="registration_link" placeholder="Masukkan link pendaftaran..." required="" />
          <small id="registLink" class="form-text text-muted">*Harap gunakan link yang sudah dipendekkan.</small>
        </div>
      </div>

      <div class="form-group row">
        <label for="categories" class="col-sm-2 col-form-label">Target Peserta</label>
        <div class="col-sm-10">
          <select class="form-select" name="categories" id="categories">
            <option selected>Choose...</option>
            <option value="FIKTI">FIKTI</option>
            <option value="FTI">FTI</option>
            <option value="FE">FE</option>
            <option value="FTSP">FTSP</option>
            <option value="FPSI">FPSI</option>
            <option value="FSB">FSB</option>
            <option value="FIKOM">FIKOM</option>
            <option value="FK">FK</option>
            <option value="D3BK">D3BK</option>
            <option value="Mahasiswa Gunadarma">Mahasiswa Gunadarma</option>
            <option value="Umum">Umum</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="sosmed" class="col-sm-2 col-form-label">Social Media</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="sosmed" name="sosmed" placeholder="Masukkan social media..." required="" />
        </div>
      </div>

      <div class="form-group row">
        <label for="poster" class="col-sm-2 col-form-label">Poster Acara</label>
        <div class="col-sm-10">
          <input type="file" class="form-control-file" name="poster" id="poster" required="" />
        </div>
      </div>

      <div class="form-group row">
        <label for="description" class="col-sm-2 col-form-label pt-0">Deskripsi Singkat Lomba</label>
        <div class="col-sm-10">
          <textarea class="form-control" id="editor" name="description" rows="3" placeholder="Deskripsikan secara singkat mengenai lombamu..."></textarea>
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

@push('addon-script')
  <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
  <script>
      ClassicEditor
          .create( document.querySelector( '#editor' ) )
          .catch( error => {
              console.error( error );
          } );
  </script>
@endpush