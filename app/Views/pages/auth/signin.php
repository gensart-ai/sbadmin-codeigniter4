<!DOCTYPE html>
<html lang="id-ID">
<?= $this->include('templates/header'); ?>
<body class="bg-primary">
    <main>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4"><?= $loginTitle; ?></h3>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                    <label for="inputEmail">Username</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                    <label for="inputPassword">Password</label>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <a class="small" href="<?= base_url('forgot'); ?>">Lupa Password?</a>
                                    <a class="btn btn-primary" href="index.html">Login</a>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center py-3">
                            <div class="small"><a href="<?= base_url('register'); ?>">Registrasi Akun Baru</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>