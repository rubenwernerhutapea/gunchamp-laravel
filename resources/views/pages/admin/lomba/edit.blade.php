@extends('layouts.admin')

@section('name')
  Edit Lomba
@endsection

@section('content')
<!-- Page wrapper -->
<div class="page-wrapper">
  <!-- Bread crumb and right sidebar toggle -->
  <div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Edit Lomba</h4>
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
          <form action="{{ route('lomba.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card">
              <div class="card-body">
                
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="name" class="col-sm-2 col-form-label">Nama Lomba</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" value="{{ $item->name }}" required />
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Pemilik</label>
                      <div class="col-sm-10">
                        <select name="user_id" class="form-control">
                          <option value="{{ $item->user_id }}" selected>{{ $item->user->name }}</option>
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
                        <input type="text" class="form-control" name="registration_period" value="{{ $item->registration_period }}" required />
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="registration_fee" class="col-sm-2 col-form-label">Biaya Pendaftaran</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="registration_fee" value="{{ $item->registration_fee}}" required />
                        <small id="registFee" class="form-text text-muted">*Isi dengan angka '0' jika tidak ada biaya pendaftaran.</small>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="registration_link" class="col-sm-2 col-form-label">Link Pendaftaran</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="registration_link" value="{{ $item->registration_link }}" required />
                        <small id="registLink" class="form-text text-muted">*Harap gunakan link yang sudah dipendekkan.</small>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="categories" class="col-sm-2 col-form-label">Target Peserta</label>
                      <div class="col-sm-10">
                        <select name="categories" required class="form-control">
                            <option value="{{ $item->categories }}" selected>Tidak diganti</option>
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
                        <input type="text" class="form-control" name="sosmed" value="{{ $item->sosmed }}" required />
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="poster" class="col-sm-2 col-form-label">Poster Acara</label>
                      {{-- <input type="hidden" name="oldImage" value="{{ $item->poster }}"> --}}
                      <div class="col-sm-10">
                        @if ($item->poster)
                          <div class="col-md-12">
                            <img src="{{ Storage::url($item->poster) }}" height="100px" width="100px" alt="">
                          </div>
                        @else
                          <div class="col-md-12">
                            <img height="100px" width="100px" alt="">
                          </div>
                        @endif
                        <input type="file" class="form-control" name="poster" placeholder="poster"/>
                        <small id="posterAcara" class="form-text text-muted">*Format .JPG/.PNG</small>
                      </div>
                    </div>
                    {{-- <div class="col-md-12">
                      <img src="{{ Storage::url($item->poster) }}" height="100px" width="100px" alt="">
                    </div> --}}
                  </div>

                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="description" class="col-sm-2 col-form-label pt-0">Deskripsi Singkat Lomba</label>
                      <div class="col-sm-10">
                        <textarea name="description" id="editor">{!! $item->description !!}</textarea>
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