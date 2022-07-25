@extends('layouts.dashboard')

@section('name')
  Dashboard
@endsection

@section('content')
  <!-- Bread crumb and right sidebar toggle -->
  <div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Dashboard</h4>
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
          <h3>Selamat Datang, Para penyelenggara lomba!</h3>
          <h6>Sudah siap untuk mencetak banyak pemenang?</h6>
        </div>

        <div class="comment-widgets">
          <!-- Rules -->
          <div class="rules px-4 mt-0">
            <p><strong>Panduan menggunakan menu: </strong></p>
            <ol>
              <li>Setelah berhasil login, akan terdapat sidebar menu yang berisi 3 (tiga) menu. Pada tampilan mobile, dapat mengklik icon 'tiga baris' di pojok kanan atas untuk membuka sidebar menu.</li>
              <li>Sidebar menu terdiri dari menu dashboard, profil dan lomba saya.</li>
              <li><strong>Menu Dashboard</strong>, digunakan sebagai tampilan awal ketika baru login. Pada menu ini akan ditampilkan panduan menggunakan menu-menu pada user.</li>
              <li><strong>Menu profil</strong>, digunakan untuk melihat data pribadi yang sudah didaftarkan sebelumnya. Pada menu ini, user juga dapat mengubah data pribadi dan password dari akun yang dimiliki.</li>
              <li><strong>Menu lomba saya</strong>, digunakan untuk melihat tabel data dari lomba yang berhasil ditambahkan ke website Gunchamp. Pada menu ini user dapat menambah data lomba baru, memperbaharui data lomba dan menghapus data lomba menggunakan pada tombol aksi yang tersedia.<strong> Menu ini adalah menu utama bagi kamu yang ingin mempromosikan lombamu!</strong></li>
              <li>Untuk kembali pada tampilan beranda website dapat mengklik<strong> logo Gunchamp</strong> pada sidebar menu dan untuk keluar dari akun dapat mengklik <strong>tombol keluar</strong>.</li>
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