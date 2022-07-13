@extends('layouts.auth')

@section('name')
  Daftar
@endsection

@section('content')
<!-- FORM -->
<section class="login-form" id="login-form">
    <div class="container">
    <h4 class="d-flex justify-content-center py-3">Daftar Akun</h4>
    <form action="">
        <div class="row user-details">
        <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="name-user">Nama Instansi</label>
            <input type="text" class="form-control" id="name-user" placeholder="Masukkan nama instansi" required="" />
        </div>

        <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="phone-num">Nomor Telepon</label>
            <input type="text" class="form-control" id="phone-num" placeholder="Masukkan nomor telepon" required="" />
        </div>

        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" placeholder="Masukkan email" required="" />
        </div>

        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Masukkan password" required="" />
        </div>
        </div>

        <div class="button">
        <button type="button" class="btn btn-warning">Daftar</button>
        </div>
    </form>

    <p class="d-flex justify-content-center">Sudah memiliki akun? <a class="pl-1" href="{{ url('/login') }}"> Masuk Akun</a></p>
    </div>
</section>
<!-- AKHIR FORM -->

<div class="container" style="display: none">
    <div class="row justify-content-center hide">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
