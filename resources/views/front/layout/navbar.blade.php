<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
        <img src="{{ asset('assets/images/logosalimah.png') }}" alt="">
        {{-- <a class="navbar-brand nav-putih fw-bold" href="#!">SALIMAH KUBU RAYA</a> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('Artikel*') ? 'active' : '' }}"
                        href="{{ url('/Artikel') }}">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('galeri*') ? 'active' : '' }}"
                        href="{{ url('/galeri') }}">Galeri</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('Agenda*') || Request::is('KegiatanSelesai*') ? 'active' : '' }}"
                        href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Kegiatan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item {{ Request::is('Agenda*') ? 'active' : '' }}"
                                href="{{ url('/Agenda') }}">Agenda</a></li>
                        <li><a class="dropdown-item {{ Request::is('KegiatanSelesai*') ? 'active' : '' }}"
                                href="{{ url('/KegiatanSelesai') }}">Kegiatan Selesai</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about*') ? 'active' : '' }}"
                        href="{{ url('/about') }}">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>