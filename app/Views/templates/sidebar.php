<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Utama</div>
            <a class="nav-link" href="<?= base_url(); ?>">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Beranda
            </a>
            <div class="sb-sidenav-menu-heading">Tambahan</div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts" id="layoutMenu">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Menu
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="#">Sub Menu</a>
                    <a class="nav-link" href="#">Sub Menu</a>
                </nav>
            </div>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">
            Pukul <span id="time-dock"><?= date('H:i:s'); ?></span> (WIB)
        </div>
        <div class="small">
            Tanggal <span id="date-dock"><?= date('d/m/Y'); ?></span> <small>(d/m/y)</small>
        </div>
    </div>
</nav>
<script>
    const timeDock = document.getElementById('time-dock')
    const dateDock = document.getElementById('date-dock')

    setInterval(_ => {
        const now = new Date();
        timeDock.innerText = now.getHours() + ':' + now.getMinutes() + ':' + now.getSeconds();
        dateDock.innerText = now.getDay() + '/' + now.getMonth() + '/' + now.getFullYear()
    }, 1000)

    // To open a sidebar based on opened menu
    // addEventListener('DOMContentLoaded', _ => {
    //     document.getElementById('layoutMenu').click()
    // })
</script>