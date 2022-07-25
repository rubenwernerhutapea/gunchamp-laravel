@extends('layouts.admin')

@section('name')
  Lomba
@endsection

@section('content')
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
                    <div class="form-group row">
                      <label for="name" class="col-sm-2 col-form-label">Nama Lomba</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lomba..." />
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Pemilik</label>
                      <div class="col-sm-10">
                        <select name="user_id" class="form-control">
                          @foreach ($user as $pemilik)
                            <option value="{{ $pemilik->id }}">{{ $pemilik->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="registration_period" class="col-sm-2 col-form-label pt-0">Periode Pendaftaran</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="registration_period" name="registration_period" placeholder="Masukkan periode tanggal pendaftaran..." required="" />
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="registration_fee" class="col-sm-2 col-form-label">Biaya Pendaftaran</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="registration_fee" name="registration_fee" placeholder="Masukkan biaya pendaftaran..." required="" />
                        <small id="registFee" class="form-text text-muted">*Isi dengan 'GRATIS' jika tidak ada biaya pendaftaran.</small>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="registration_link" class="col-sm-2 col-form-label">Link Pendaftaran</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="registration_link" name="registration_link" placeholder="Masukkan link pendaftaran..." required="" />
                        <small id="registLink" class="form-text text-muted">*Harap gunakan link yang sudah dipendekkan.</small>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="categories" class="col-sm-2 col-form-label">Target Peserta</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="categories" id="categories" required>
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
                  </div>

                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="sosmed" class="col-sm-2 col-form-label">Social Media</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="sosmed" name="sosmed" placeholder="Masukkan social media..." required="" />
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="poster" class="col-sm-2 col-form-label">Poster Acara</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control" name="poster" id="poster" placeholder="poster" required="" />
                        <small id="posterAcara" class="form-text text-muted">*Format .JPG/.PNG</small>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="description" class="col-sm-2 col-form-label pt-0">Deskripsi Singkat Lomba</label>
                      <div class="col-sm-10">
                        <textarea id="editor" name="description" placeholder="Deskripsikan secara singkat mengenai lombamu..."></textarea>
                        {{-- <div id="editor"></div> --}}
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <button type="submit" class="btn btn-info col-sm-12">Simpan</button>
                </div>

              </div>
            </div>
          </form>
        </div>
    </div>
  </div>
  <!-- End Container Fluid -->
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