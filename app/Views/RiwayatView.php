<?= $this->extend('template'); ?>

<?= $this->section('konten'); ?>

<!-- TINGGAL ISI AJA SESUAI BAGIANNYA -->
<div class="content transition">
    <div class="container-fluid dashboard">
        <!-- TINGGAL ISI KONTEN DISINI -->
        <!-- BISA LIAT CONTOH KODINGAN DI ADMIN -->
        <h1>Riwayat Pengajuan Sertifikat</h1>

        <div class="card">
            <div class="card-body">

                <table class="table" a>
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Sertifikat</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Status</th>
                            <th scope="col">Poin</th>
                        </tr>
                    </thead>
                    <tbody align="center">
                        <?php foreach ($sertif as $s) : ?>
                            <tr>
                                <td>1</td>
                                <td><img src="/img/<?= $s['gambar']; ?>" alt="" class="gambar"></td>
                                <td><?= $s['nama_kegiatan'] ?></td>
                                <td><?= $s['status_sertifikat'] ?></td>
                                <td><?= $s['poin_skm'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
</div>

<?= $this->endSection(); ?>