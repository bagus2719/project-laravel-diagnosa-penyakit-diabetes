<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <button class="navbar-toggler d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="icon-menu"></span>
    </button>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Data Users</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('users') }}">Users</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('pasien') }}">Pasien</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                aria-controls="form-elements">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Gejala & Penyakit</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('gejala') }}">Gejala</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('penyakit') }}">Penyakit</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="icon-bar-graph menu-icon"></i>
                <span class="menu-title">Diagnosa</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('hasil') }}">Data Hasil</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('riwayat') }}">Data Riwayat</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('solusi') }}">Data Solusi</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('rule') }}">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Data Rule</span>
            </a>
        </li>
    </ul>
</nav>