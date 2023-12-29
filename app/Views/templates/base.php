<!DOCTYPE html>
<html lang="id-ID">
<?= $this->include('templates/header'); ?>

<body class="sb-nav-fixed">
    <?= $this->include('templates/navbar'); ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?= $this->include('templates/sidebar'); ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid p-4">
                    <?= $this->renderSection('content'); ?>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Hak Cipta &copy; SATIR <?= date('Y'); ?></div>
                        <div>
                            <a href="#" class="text-decoration-none">Syarat & Ketentuan</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>