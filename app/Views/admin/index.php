<?= $this->extend('admin/template'); ?>

<?= $this->section('konten'); ?>
<!--Content Start-->
<div class="content transition">
	<div class="container-fluid dashboard">
		<h3>HOME</h3>
				<div class="card">
					<div class="card-body">
					<?php if (session()->getFlashdata('posting')) : ?>
                    <div class="alert alert-success mt-4" role="alert">
							Kegiatan Berhasil Terposting!
							</div>
					<?php endif; ?>
					<!--Carousel Wrapper-->
					<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                    <h5>Sertifikat terbaru</h5>
                    <a href="" class="mb-2" style="float: right;">Lebih banyak</a>

                <!--Slides-->
                <div class="carousel-inner" role="listbox">

                    <!--First slide-->
                    <div class="carousel-item active">

                    <div class="col-md-3" style="float:left">
                    <div class="card mb-2">
                        <img class="card-img-top"
                            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
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
                        <img class="card-img-top"
                            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
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
                        <img class="card-img-top"
                            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
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
                        <img class="card-img-top"
                            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
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
                        <img class="card-img-top"
                        src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
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
                        <img class="card-img-top"
                        src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
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
                        <img class="card-img-top"
                        src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg" alt="Card image cap">
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
                        <img class="card-img-top"
                        src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
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
                <!-- END CAROUSEL -->
			</div>
		</div>

	</div>

</div>

<?= $this->endSection(); ?>