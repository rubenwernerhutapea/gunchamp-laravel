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
          <!-- Comment Row -->
          <div class="d-flex flex-row comment-row p-3 mt-0">
            <div class="p-2"><img src="{{ url('/backend/plugins/images/users/varun.jpg') }}" alt="user" width="50" class="rounded-circle" /></div>
            <div class="comment-text ps-2 ps-md-3 w-100">
              <h5 class="font-medium">{{ Auth::user()->name }}</h5>
              <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry.It has survived not only five centuries. </span>
              <div class="comment-footer d-md-flex align-items-center">
                <span class="badge bg-primary rounded">Pending</span>

                <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">April 14, 2021</div>
              </div>
            </div>
          </div>

          <div class="rules d-flex flex-row comment-row p-4 mt-0">
            <p>
              (mau diisi rules sih niatnya) Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam quia neque recusandae, molestiae eligendi perspiciatis quaerat saepe iusto odit, porro provident delectus debitis dolore
              qui labore cumque enim in impedit, alias aspernatur nulla atque expedita? Corporis voluptate soluta minima perferendis facere qui ex aliquid, tenetur eaque pariatur labore ea odio iusto deserunt ducimus asperiores nisi
              adipisci, consectetur nam! Ullam expedita sed inventore assumenda ipsam commodi magni unde, optio nisi enim, qui deserunt rerum nobis vero, error perferendis porro minus aliquid repellendus et quod obcaecati temporibus
              voluptates. A impedit qui at deserunt, alias incidunt facere quisquam et voluptatibus excepturi soluta ratione.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- /.col -->
  </div>
</div>
<!-- End Container Fluid -->
@endsection