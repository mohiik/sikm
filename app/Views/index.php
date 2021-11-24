<?= $this->extend('template'); ?>

<?= $this->section('konten'); ?>

<!-- TINGGAL ISI AJA SESUAI BAGIANNYA -->
<div class="content transition">
    <div class="container-fluid dashboard">
        <!-- TINGGAL ISI KONTEN DISINI -->
        <!-- BISA LIAT CONTOH KODINGAN DI ADMIN -->
        <h3>Home</h3>
        <div class="card">
            <div class="card-body">
                <!--Carousel Wrapper-->
                <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                    <h5>Kepanitiaan</h5>
                    <a href="<?= base_url('pages') ?>/panitia_lebih" class="mb-2" style="float: right;">Lebih banyak</a>

                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">

                        <!--First slide-->
                        <div class="carousel-item active">

                            <div class="col-md-3" style="float:left">
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

                            <div class="col-md-3" style="float:left">
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

                            <div class="col-md-3" style="float:left">
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

                            <div class="col-md-3" style="float:left">
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
                        <!--Second slide-->
                        <div class="carousel-item">

                            <div class="col-md-3" style="float:left">
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

                            <div class="col-md-3" style="float:left">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                            card's content.</p>
                                        <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3" style="float:left">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                            card's content.</p>
                                        <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3" style="float:left">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                            card's content.</p>
                                        <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--Controls-->

                        <div class="controls-top" style="position: absolute; bottom: 0; left: 46.3%;">
                            <a class="btn btn-circle btn-info" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                            <a class="btn btn-circle btn-info" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></a>
                        </div>
                        <!--/.Controls-->
                    </div>
                </div>
                <br><br>
                <!-- END CAROUSEL -->

                <!--Carousel Wrapper-->
                <div id="multi-item-example2" class="carousel slide carousel-multi-item" data-ride="carousel">
                    <h5>Lomba</h5>
                    <a href="<?= base_url('pages') ?>/lomba_lebih" class="mb-2" style="float: right;">Lebih banyak</a>

                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">

                        <!--First slide-->
                        <div class="carousel-item active">

                            <div class="col-md-3" style="float:left">
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

                            <div class="col-md-3" style="float:left">
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

                            <div class="col-md-3" style="float:left">
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

                            <div class="col-md-3" style="float:left">
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
                        <!--Second slide-->
                        <div class="carousel-item">

                            <div class="col-md-3" style="float:left">
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

                            <div class="col-md-3" style="float:left">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                            card's content.</p>
                                        <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3" style="float:left">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                            card's content.</p>
                                        <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3" style="float:left">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                            card's content.</p>
                                        <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--Controls-->

                        <div class="controls-top" style="position: absolute; bottom: 0; left: 46.3%;">
                            <a class="btn btn-circle btn-info" href="#multi-item-example2" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                            <a class="btn btn-circle btn-info" href="#multi-item-example2" data-slide="next"><i class="fas fa-chevron-right"></i></a>
                        </div>
                        <!--/.Controls-->
                    </div>
                </div>
                <br><br>
                <!-- END CAROUSEL -->

                <!--Carousel Wrapper-->
                <div id="multi-item-example3" class="carousel slide carousel-multi-item" data-ride="carousel">
                    <h5>Seminar</h5>
                    <a href="<?= base_url('pages') ?>/seminar_lebih" class="mb-2" style="float: right;">Lebih banyak</a>

                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">

                        <!--First slide-->
                        <div class="carousel-item active">

                            <div class="col-md-3" style="float:left">
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

                            <div class="col-md-3" style="float:left">
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

                            <div class="col-md-3" style="float:left">
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

                            <div class="col-md-3" style="float:left">
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
                        <!--Second slide-->
                        <div class="carousel-item">

                            <div class="col-md-3" style="float:left">
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

                            <div class="col-md-3" style="float:left">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                            card's content.</p>
                                        <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3" style="float:left">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                            card's content.</p>
                                        <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3" style="float:left">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                            card's content.</p>
                                        <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--Controls-->

                        <div class="controls-top" style="position: absolute; bottom: 0; left: 46.3%;">
                            <a class="btn btn-circle btn-info" href="#multi-item-example3" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                            <a class="btn btn-circle btn-info" href="#multi-item-example3" data-slide="next"><i class="fas fa-chevron-right"></i></a>
                        </div>
                        <!--/.Controls-->
                    </div>
                </div>
                <!-- END CAROUSEL -->
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>