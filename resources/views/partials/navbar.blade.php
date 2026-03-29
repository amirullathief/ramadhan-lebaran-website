<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">🌙 Ramadhan & Lebaran</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ramadhan') }}">Kegiatan Ramadhan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('lebaran') }}">Kegiatan Lebaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('jadwal') }}">Jadwal Ramadhan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tentang') }}">Tentang</a>
                </li>
            </ul>
        </div>
    </div>
</nav>