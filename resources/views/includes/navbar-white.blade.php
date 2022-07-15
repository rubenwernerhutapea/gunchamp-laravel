<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light nav-lomba">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">
      <img src="img/logo-circle.png" width="50" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-sm-end" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="{{ route('home') }}">Beranda<span class="sr-only">(current)</span></a>
        <a class="nav-link" href="#about">Tentang</a>
        <a class="nav-link active" href="{{ route('lomba') }}">Lomba</a>
        @guest
          <a class="btn btn-outline-dark tombol" href="{{ route('login') }}">Masuk</a>
          <a class="btn btn-warning tombol" href="{{ route('register') }}">Daftar</a>
        @endguest
      </div>
      @auth
        <ul class="navbar-nav d-none d-lg-flex">
            <li class="nav-item dropdown">
                <a
                    href="#"
                    class="nav-link"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                >
                    Hi, {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu">
                    <a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a>
                    </div>
            </li>
        </ul>
      @endauth
    </div>
  </div>
</nav>
<!-- AKHIR NAVBAR -->