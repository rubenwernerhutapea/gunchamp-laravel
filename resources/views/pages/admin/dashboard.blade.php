@extends('layouts.admin')

@section('name')
  Admin Dashboard
@endsection

@section('content')
  <!-- Bread crumb and right sidebar toggle -->
  <div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Admin Dashboard</h4>
      </div>
    </div>
  </div>
  <!-- End Bread crumb and right sidebar toggle -->

  <!-- Container fluid  -->
  <div class="container-fluid">
    <div class="row">
      <!-- .col -->
      <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="card white-box p-0">
          <div class="card-body">
            <h3>Selamat Datang!</h3>
          </div>

          <div class="comment-widgets">
            <!-- Rules -->
            <div class="rules px-4 mt-0">
              <p><strong>Panduan menggunakan dashboard admin: </strong></p>
              <ol>
                <li>Setelah berhasil login menggunakan akun admin, akan terdapat sidebar menu yang berisi 3 (tiga) menu. Pada tampilan mobile, dapat mengklik icon 'tiga baris' di pojok kanan atas untuk membuka sidebar menu.</li>
                <li>Sidebar menu terdiri dari menu dashboard, database user dan database lomba.</li>
                <li><strong>Menu Dashboard</strong>, digunakan sebagai tampilan awal ketika baru login sebagai admin. Pada menu ini akan ditampilkan panduan menggunakan menu-menu pada admin.</li>
                <li><strong>Menu Database user</strong>, digunakan untuk melihat tabel data dari seluruh user (pengguna) yang berhasil mendaftarkan diri ke website Gunchamp. Pada menu ini admin dapat menambah data user baru, memperbaharui data user dan menghapus data user menggunakan pada tombol aksi yang tersedia.</li>
                <li><strong>Menu Database lomba</strong>, digunakan untuk melihat tabel data dari seluruh lomba yang berhasil ditambahkan oleh user ke website Gunchamp. Pada menu ini admin dapat menambah data lomba baru, memperbaharui data lomba dan menghapus data lomba menggunakan pada tombol aksi yang tersedia.</li>
                <li>Untuk kembali pada tampilan beranda website dapat mengklik<strong> logo Gunchamp</strong> pada sidebar menu dan untuk keluar dari akun dapat mengklik <strong>tombol keluar.</strong></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <!-- /.col -->
    </div>
  </div>
  <!-- End Container Fluid -->
@endsection