<?= $this->extend('admin/template'); ?>

<?= $this->section('konten'); ?>

<!-- TINGGAL ISI AJA SESUAI BAGIANNYA -->
<div class="content transition">
    <div class="container-fluid dashboard">
        <!-- TINGGAL ISI KONTEN DISINI -->
        <!-- BISA LIAT CONTOH KODINGAN DI ADMIN -->
        <h3>Input Poin SKM</h3>
		<div class="card">
			<div class="card-body">

			<?php if (session()->getFlashdata('update')) : ?>
                    <div class="alert alert-success mt-4" role="alert">
                      Update Berhasil!
                    </div>
            <?php endif; ?>
			<table class="table table-striped table-bordered" style="width:100%;overflow:auto;">
					<thead class="bg-primary">
						<tr>
							<th style="width:20px;text-align: center;">No.</th>
							<th>NIM</th>
							<th>Nama Kegiatan</th>
							<th>Tigkat</th>
							<th>Status</th>
							<th>Poin</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$nomor = 0;
						foreach ($sertifikat as $sertif) : ?>
							<?php $nomor++; ?>
							<tr>
								<td align="center"><?= $nomor ?></td>
								<td><?= $sertif['nim'] ?></td>
								<td><?= $sertif['nama_kegiatan'] ?></td>
								<td><?= $sertif['tingkat'] ?></td>
								<td><?= $sertif['status_sertifikat'] ?></td>
								<td><?= $sertif['poin_skm'] ?></td>
								<td><a class="btn btn-sm bg-success" href="<?= base_url('admin') ?>/detail_sertifikat/<?= $sertif['id_sertifikat'] ?>"><i class="la la-pencil-alt"></i>INPUT POIN</a>
								</td>
							</tr>
						<?php endforeach; ?>

					</tbody>
				</table>

				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-end">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1">Previous</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item">
							<a class="page-link" href="#">Next</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
    </div>
</div>

<?= $this->endSection(); ?>