<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dashboard - Admin</title>

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/vendors/bootstrap/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Style CSS (White)-->
    <link rel="stylesheet" href="/css/White.css">
    <!-- Style CSS (Dark)-->
    <link rel="stylesheet" href="/css/Dark.css">
    <!-- FontAwesome CSS-->
    <link rel="stylesheet" href="/vendors/fontawesome/css/all.css">
    <!-- Icon LineAwesome CSS-->
    <link rel="stylesheet" href="/vendors/lineawesome/css/line-awesome.min.css">

</head>

<body>
    <div class="main">
        <div class="container">
            <div class="row my-3 py-3 gin">
                <div class="col-6 log1">
                    <form action="/Auth/loginProcess" method="POST">
                        <h3 class="pb-2 text-center">Log in to yout account</h3>
                        <div class="card pb-2">
                            <div class="form-group card-body">
                                <input type="nim" class="form-control <?= ($validation->hasError('nim')) ? 'is-invalid' : '' ?>" id="nim" aria-describedby="nim" name="nim" placeholder="NIM">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nim'); ?>
                                </div>
                            </div>
                            <div class="form-group card-body">
                                <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>" id="password" name="password" placeholder="Password">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password'); ?>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </div>
                        <?php if (session()->getFlashData('pesan')) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= session()->getFlashData('pesan'); ?>
                            </div>
                        <?php endif; ?>
                    </form>
                </div>
                <div class="col-6 text-center log" ">
                        <h1>SIKM</h1>
                        <h4>Sistem Informasi</h4>
                        <h4>Kegiatan Mahasiswa</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Library Javascipt-->
    <script src=" /vendors/bootstrap/js/jquery.min.js">
                    </script>
                    <script src="/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <script src="/vendors/bootstrap/js/popper.min.js"></script>
                    <script src="/js/script.js"></script>
                    <script>
                        function changeLabel() {
                            const gambar = document.querySelector('#gambar');
                            const gambarLabel = document.querySelector('.custom-file-label');

                            gambarLabel.textContent = gambar.files[0].name;
                        }
                    </script>


</body>

</html>