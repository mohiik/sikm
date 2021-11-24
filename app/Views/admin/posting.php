<?= $this->extend('admin/template'); ?>

<?= $this->section('konten'); ?>
<!--Content Start-->
<div class="content transition">
	<div class="container-fluid dashboard">
        <div class="card">
            <div class="card-body">
                <h3>Posting Kegiatan</h3>
                <form action="<?= base_url('admin'); ?>/upload_kegiatan" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label class="form-label">Judul</label>
                        <input type="text" class="form-control mb-1 
                        <?= ($validasi->hasError('judul')) ? 'is-invalid' : '' ?>" name="judul" placeholder="Judul Kegiatan" required>
                        <div class="invalid-feedback">
                                <?= $validasi->getError('judul'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" placeholder="Deskripi Kegiatan" style="height: 200px;" required></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Jenis</label>
                        <select class="custom-select" name="jenis"> 
                            <option value="lomba" selected>Lomba</option>
                            <option value="kepanitiaan">Kepanitiaan</option>
                            <option value="seminar">Seminar</option>
                            <option value="pkl">PKL</option>
                        </select>            
                    </div>
                    <div class="form-group">
                        <label class="form-label">Upload Gambar</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validasi->hasError('gambar')) ? 'is-invalid' : '' ?>" id="gambar" name="gambar" onchange="changeLabel()" required>
                            <label class="custom-file-label" for="gambar">Choose file</label>
                            <div class="invalid-feedback">
                                    <?= $validasi->getError('gambar'); ?>
                            </div>
                        </div>
                        
                    </div>
                    <button type="submit" class="btn btn-sm bg-success" name="submit">KIRIM</button>
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