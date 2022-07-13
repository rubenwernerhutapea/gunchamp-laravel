<!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="/img/logo-circle.png" width="50" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-sm-end" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" href="{{ route('home') }}">Beranda<span class="sr-only">(current)</span></a>
            <a class="nav-link" href="#about">Tentang</a>
            <a class="nav-link" href="{{ route('lomba') }}">Lomba</a>
            <a class="btn btn-outline-light tombol" href="#">Masuk</a>
            <a class="btn btn-warning tombol" href="#">Daftar</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- AKHIR NAVBAR -->