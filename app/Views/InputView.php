<?= $this->extend('template'); ?>

<?= $this->section('konten'); ?>

<!-- TINGGAL ISI AJA SESUAI BAGIANNYA -->
<div class="content transition">
    <div class="container-fluid dashboard">
        <!-- TINGGAL ISI KONTEN DISINI -->

        <h1>Input Sertifikat</h1>
        <!-- <form action="Input/inputData" method="POST"> -->
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0 huruf">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <p class="huruf" id="kategori1">Riwayat Keorganisasian</p>
                        </button>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="container">
                            <div class="row mt-2">
                                <div class="col-10">Lembaga Kedaulatan Mahasiswa</div>
                                <div class="col-2"><a type="submit" class="btn btn-primary btn-sm" href="/Input/inputData/1">Tambah Data</a></div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-10">Eksekutif Mahasiswa</div>
                                <div class="col-2"><a type="submit" class="btn btn-primary btn-sm" href="/Input/inputData/2">Tambah Data</a></div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-10">Kongres Mahasiswa</div>
                                <div class="col-2"><a type="submit" class="btn btn-primary btn-sm" href="/Input/inputData/3">Tambah Data</a></div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-10">Dewan Perwakilan Mahasiswa</div>
                                <div class="col-2"><a type="submit" class="btn btn-primary btn-sm" href="/Input/inputData/4">Tambah Data</a></div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-10">Unit Kegiatan Mahasiswa</div>
                                <div class="col-2"><a type="submit" class="btn btn-primary btn-sm" href="/Input/inputData/5">Tambah Data</a></div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-10">Asisten Praktikum</div>
                                <div class="col-2"><a type="submit" class="btn btn-primary btn-sm" href="/Input/inputData/6">Tambah Data</a></div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-10">Asisten Matakuliah</div>
                                <div class="col-2"><a type="submit" class="btn btn-primary btn-sm" href="/Input/inputData/7">Tambah Data</a></div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-10">Student Employee</div>
                                <div class="col-2"><a type="submit" class="btn btn-primary btn-sm" href="/Input/inputData/8">Tambah Data</a></div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-10">Pendamping Disabilitas</div>
                                <div class="col-2"><a type="submit" class="btn btn-primary btn-sm" href="/Input/inputData/9">Tambah Data</a></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <p class="huruf">Riwayat Kepanitiaan</p>
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="row mt-2">
                                    <div class="col-10">Karya Ilmiah, Seminar, Seni, dan Workshop</div>
                                    <div class="col-2"><a type="submit" class="btn btn-primary btn-sm" href="/Input/inputData/10">Tambah Data</a></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-10">PK2MABA, Diesnatalis, dan Pemilihan Umum Mahasiswa</div>
                                    <div class="col-2"><a type="submit" class="btn btn-primary btn-sm" href="/Input/inputData/11">Tambah Data</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <p class="huruf">Riwayat Prestasi/Kejuaraan</p>
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="row">
                                    <div class="col-10">Bidang Penalaran, Minat, dan Bakat</div>
                                    <div class="col-2"><a type="submit" class="btn btn-primary btn-sm" href="/Input/inputData/12">Tambah Data</a></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-10">Duta Pada Bidang Tertentu</div>
                                    <div class="col-2"><a type="submit" class="btn btn-primary btn-sm" href="/Input/inputData/13">Tambah Data</a></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-10">Pelatih</div>
                                    <div class="col-2"><a type="submit" class="btn btn-primary btn-sm" href="/Input/inputData/14">Tambah Data</a></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-10">Juri / Wasit</div>
                                    <div class="col-2"><a type="submit" class="btn btn-primary btn-sm" href="/Input/inputData/15">Tambah Data</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <p class="huruf">Riwayat Kepesertaan</p>
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="row">
                                    <div class="col-10">PK2MABA</div>
                                    <div class="col-2"><a type="submit" class="btn btn-primary btn-sm" href="/Input/inputData/16">Tambah Data</a></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-10">Workshop/Training</div>
                                    <div class="col-2"><a type="submit" class="btn btn-primary btn-sm" href="/Input/inputData/17">Tambah Data</a></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-10">Forum Komunikasi / Seminar Kuliah</div>
                                    <div class="col-2"><a type="submit" class="btn btn-primary btn-sm" href="/Input/inputData/18">Tambah Data</a></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-10">Penelitian dan Pengabdian Masyarakat Bersama Dosen</div>
                                    <div class="col-2"><a type="submit" class="btn btn-primary btn-sm" href="/Input/inputData/19">Tambah Data</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <p class="huruf">Rekognisi</p>
                        </button>
                    </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="row">
                                    <div class="col-10">Paten</div>
                                    <div class="col-2"><a type="submit" class="btn btn-primary btn-sm" href="/Input/inputData/20">Tambah Data</a></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-10">Hak cipta / Buku</div>
                                    <div class="col-2"><a type="submit" class="btn btn-primary btn-sm" href="/Input/inputData/21">Tambah Data</a></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-10">Penulis Jurnal Internasional</div>
                                    <div class="col-2"><a type="submit" class="btn btn-primary btn-sm" href="/Input/inputData/22">Tambah Data</a></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-10">Penulis Jurnal Nasional (Selain Repositori Skripsi)</div>
                                    <div class="col-2"><a type="submit" class="btn btn-primary btn-sm" href="/Input/inputData/23">Tambah Data</a></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-10">Pameran Internasional</div>
                                    <div class="col-2"><a type="submit" class="btn btn-primary btn-sm" href="/Input/inputData/24">Tambah Data</a></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-10">Pameran Regional / Universitas / Fakultas</div>
                                    <div class="col-2"><a type="submit" class="btn btn-primary btn-sm" href="/Input/inputData/25">Tambah Data</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingSix">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <p class="huruf">Kewirausahaan</p>
                        </button>
                    </h2>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="row">
                                    <div class="col-10">Kewirausahaan Internasional</div>
                                    <div class="col-2"><a type="submit" class="btn btn-primary btn-sm" href="/Input/inputData/26">Tambah Data</a></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-10">Kewirausahaan Nasional</div>
                                    <div class="col-2"><a type="submit" class="btn btn-primary btn-sm" href="/Input/inputData/27">Tambah Data</a></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-10">Kewirausahaan Regional / Universitas / Fakultas</div>
                                    <div class="col-2"><a type="submit" class="btn btn-primary btn-sm" href="/Input/inputData/28">Tambah Data</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </form> -->
    </div>
</div>


<?= $this->endSection(); ?>