<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="logo">
            <!-- <div> -->
            <h1>
                <a href="#!"><img src="<?= base_url('img') ?>/Logo.png" alt="" class="img-fluid">
                    <span>PORTAL</span>
                </a>
            </h1>
            <!-- </div> -->
        </div>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                <li><a class="nav-link scrollto" href="#features">Kaderisasi</a></li>
                <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                <li><a class="nav-link" href="<?= route_to('dashboard') ?>"><i class="ri-login-box-line"></i> Masuk</a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>