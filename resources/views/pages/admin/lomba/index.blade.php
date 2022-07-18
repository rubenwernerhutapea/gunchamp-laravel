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
        <h4 class="page-title">Lomba</h4>
      </div>
    </div>
  </div>
  <!-- End Bread crumb and right sidebar toggle -->

  <!-- Container fluid  -->
  <div class="container-fluid">
    <div class="row">
      <!-- .col -->
      <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{  route('lomba.create') }}" class="btn btn-primary mb-3">
                                + Tambah Lomba Baru
                            </a>
                            <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Pemilik</th>
                                        <th>Periode Pendaftaran</th>
                                        <th>Biaya Pendaftaran</th>
                                        <th>Link Pendaftaran</th>
                                        <th>Target Peserta</th>
                                        <th>Sosial Media</th>
                                        <th>Poster</th>
                                        {{-- <th>Deskripsi</th> --}}
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
  </div>
  <!-- End Container Fluid -->
</div>
@endsection

@push('addon-script')
  <script>
      // AJAX DataTable
      var datatable = $('#crudTable').DataTable({
          processing: true,
          serverSide: true,
          ordering: true,
          ajax: {
              url: '{!! url()->current() !!}',
          },
          columns: [
              { data: 'id', name: 'id' },
              { data: 'name', name: 'name' },
              { data: 'user.name', name: 'user.name' },
              { data: 'registration_period', name: 'registration_period' },
              { data: 'registration_fee', name: 'registration_fee' },
              { data: 'registration_link', name: 'registration_link' },
              { data: 'categories', name: 'categories' },
              { data: 'sosmed', name: 'sosmed' },
              { data: 'poster', name: 'poster' },
              // { data: 'description', name: 'description' },
              {
                  data: 'action',
                  name: 'action',
                  orderable: false,
                  searcable: false,
                  width: '15%'
              },
          ]
      });
  </script>
@endpush