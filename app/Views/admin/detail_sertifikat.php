<?= $this->extend('admin/template'); ?>

<?= $this->section('konten'); ?>

<!-- TINGGAL ISI AJA SESUAI BAGIANNYA -->
<div class="content transition">
    <div class="container-fluid dashboard">
        <!-- TINGGAL ISI KONTEN DISINI -->
        <!-- BISA LIAT CONTOH KODINGAN DI ADMIN -->
        <h3>Input Poin SKM</h3>
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h5>Gambar Sertifikat</h5>
                        <img src="img/<?= $sertifikat['gambar']; ?>" alt="sertfikat" width="100%">
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url('admin'); ?>/update_sertifikat/<?= $sertifikat['id_sertifikat']; ?>" method="post">
                            <input type="hidden" name="id" value="<?= $sertifikat['id_sertifikat'] ?>">
                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <select class="custom-select" name="status">
                                    <option value="Diproses" <?= ($sertifikat['status_sertifikat'] == "Diproses") ? "selected" : ""  ?>>Diproses</option>
                                    <option value="Diterima" <?= ($sertifikat['status_sertifikat'] == "Diterima") ? "selected" : ""  ?>>Diterima</option>
                                    <option value="Ditolak" <?= ($sertifikat['status_sertifikat'] == "Ditolak") ? "selected" : ""  ?>>Ditolak</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Poin SKM</label>
                                <input type="number" class="form-control <?= ($validasi->hasError('poin_skm')) ? 'is-invalid' : '' ?>" name="poin_skm" value="<?= $sertifikat['poin_skm'] ?>">
                            </div>
                            <button type="submit" class="btn btn-sm bg-success" name="submit">SIMPAN</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <h5>Nama Kegiatan</h5>
                        <p><?= $sertifikat['nama_kegiatan'] ?></p>
                        <h5>Kategori</h5>
                        <p><?= $sertifikat['kategori'] ?></p>
                        <h5>Tingkat</h5>
                        <p><?= $sertifikat['tingkat'] ?></p>
                        <h5>Jabatan</h5>
                        <p><?= $sertifikat['jabatan'] ?></p>
                        <h5>Periode Mulai</h5>
                        <p><?= $sertifikat['periode_mulai'] ?></p>
                        <h5>Periode Selesai</h5>
                        <p><?= $sertifikat['periode_selesai'] ?></p>
                        <h5>NIM Mahasiswa</h5>
                        <p><?= $sertifikat['nim'] ?></p>
                        <h5>Nama Mahasiswa</h5>
                        <p><?= $mhs['nama'] ?></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection(); ?>