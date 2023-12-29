<nav class="sb-topnav navbar navbar-expand d-flex justify-content-between align-content-center navbar-dark bg-dark">
    <div>
        <a class="navbar-brand ps-3" href="<?= base_url(); ?>">SATIR</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle">
            <i class="fas fa-bars"></i>
        </button>
    </div>
    <p class="navbar-text mb-0">Informasi Tambahan Bisa Disini, atau Judul Menu</p>
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" data-bs-toggle="dropdown">
                <i class="fas fa-user fa-fw"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li class="text-center">
                    <img src="https://picsum.photos/200" height="50" width="50" class="img-fluid rounded-5" alt="" />
                    <small class="d-block mt-2">Login sebagai:</small>
                    <p class="fw-bold">Genesaret Johnes</p>
                </li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="#!">Profil Anda</a></li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="#!">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>