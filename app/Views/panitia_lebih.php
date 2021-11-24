<?= $this->extend('template'); ?>

<?= $this->section('konten'); ?>

<!-- TINGGAL ISI AJA SESUAI BAGIANNYA -->
<div class="content transition">
    <div class="container-fluid dashboard">
        <!-- TINGGAL ISI KONTEN DISINI -->
        <!-- BISA LIAT CONTOH KODINGAN DI ADMIN -->
        <h3>Kepanitiaan</h3>
        <div class="card">
            <div class="card-body">
                <?php for ($i = 1; $i < 4; $i++) : ?>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>