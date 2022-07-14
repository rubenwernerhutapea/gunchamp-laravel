@extends('layouts.admin')

@section('name')
  Lomba
@endsection

@section('content')
<!-- Page wrapper -->
<div class="page-wrapper">
  <!-- Bread crumb and right sidebar toggle -->
  <div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Create Lomba</h4>
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
          <form action="{{ route('lomba.store') }}" method="post" enctype="multipart/form-data">
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
                      <label>Pemilik</label>
                      <select name="user_id" class="form-control">
                        @foreach ($user as $pemilik)
                          <option value="{{ $pemilik->id }}">{{ $pemilik->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Poster</label>
                      <input type="file" class="form-control" name="poster" placeholder="poster" required/>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Kategori</label>
                      <select name="categories" required class="form-control">
                          <option value="FIKTI">FIKTI</option>
                          <option value="FTI">FTI</option>
                          <option value="FSB">FSB</option>
                          <option value="FIKOM">FIKOM</option>
                          <option value="FPSIKOLOGI">FPSIKOLOGI</option>
                          <option value="D3BK">D3BK</option>
                          <option value="FTSP">FTSP</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Deskripsi</label>
                      <textarea name="description" id="editor"></textarea>
                      {{-- <div id="editor"></div> --}}
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Periode pendaftaran</label>
                      <input type="text" class="form-control" name="registration_period" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Harga Pendaftaran</label>
                      <input type="text" class="form-control" name="registration_fee" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Link Pendaftaran</label>
                      <input type="text" class="form-control" name="registration_link" required />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col text-right">
                    <button
                      type="submit"
                      class="btn btn-success px-5"
                    >
                      Save Now
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

@push('addon-script')
  {{-- <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script> --}}
  <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
  {{-- <script>
    CKEDITOR.replace('editor');
  </script> --}}
  <script>
      ClassicEditor
          .create( document.querySelector( '#editor' ) )
          .catch( error => {
              console.error( error );
          } );
  </script>
@endpush