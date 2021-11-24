<?= $this->extend('template'); ?>

<?= $this->section('konten'); ?>

<!-- TINGGAL ISI AJA SESUAI BAGIANNYA -->
<div class="content transition">
    <div class="container-fluid dashboard">
        <!-- TINGGAL ISI KONTEN DISINI -->
        <!-- BISA LIAT CONTOH KODINGAN DI ADMIN -->
        <h1>Input Sertifikat</h1>

        <div class="card">
            <div class="card-body">
                <form action="/Input/save" method="POST" enctype="multipart/form-data">
                    <div class="container">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Tingkat</label>
                            <select class="form-select" name="value" aria-label="Default select example">
                                <option value="1">Internasional</option>
                                <option value="2">Nasional</option>
                                <option value="3">Nasional Dikti</option>
                                <option value="4">Nasional Non Dikti</option>
                                <option value="5">Regional</option>
                                <option value="6">Universitas</option>
                                <option value="7">Fakultas</option>
                                <option value="8">Jurusan/Program Studi</option>
                                <option value="9">Komunitas Studi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Jabatan</label>
                            <select class="form-select" name="value1" aria-label="Default select example">
                                <option value="1">Ketua</option>
                                <option value="2">Pembicara</option>
                                <option value="3">Peserta</option>
                                <option value="4">Perorangan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="periode2" class="form-label">Nama Kegiatan/Lembaga/Kepanitiaan</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" id="nama" name="nama">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 mb-3">
                                <label for="periode1" class="form-label">Periode Mulai</label>
                                <input type="date" class="form-control " id="periode1" name="periode1">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="periode2" class="form-label">Periode Selesai</label>
                                <input type="date" class="form-control " id="periode2" name="periode2">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : '' ?>" id="gambar" name="gambar" onchange="changeLabel()">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('gambar'); ?>
                                </div>
                                <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<script>
    function changeLabel() {
        const gambar = document.querySelector('#gambar');
        const gambarLabel = document.querySelector('.custom-file-label');

        gambarLabel.textContent = gambar.files[0].name;
    }
</script>

<?= $this->endSection(); ?>