<?= $this->extend('template'); ?>

<?= $this->section('konten'); ?>

<!-- TINGGAL ISI AJA SESUAI BAGIANNYA -->
<div class="content transition">
    <div class="container-fluid dashboard">
        <!-- TINGGAL ISI KONTEN DISINI -->
        <!-- BISA LIAT CONTOH KODINGAN DI ADMIN -->
        <div>
            <h3>SKMku</h3>
        </div>
        <div class="card">
            <div class="card-body">
                <table style="width:50%">
                    <tr>
                        <td>
                            <h1 style="font-size:60px">Poin SKM</h1>
                            <h1 style="font-size:60px;">saat ini</h1>
                        </td>
                        <td style="text-align:center;">
                            <div style="width:200px; height:200px; background:#2F0961; border-radius:100%; font-size:60px;">
                                <p style="padding-top:50px;"><?php echo $poin_skm; ?></p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top:60px; padding-bottom:20px; padding-left:100px;"><a href="<?= base_url('pages') ?>/info"><button style="width:200px; height:70px; font-size:20px; border-radius: 10px;" type="button">Info bobot SKM</button></a></td>
                        <td style="padding-top:60px; padding-bottom:20px"><a href="/Riwayat/index"><button style="width:200px; height:70px; font-size:20px; border-radius: 10px;" type="button">Riwayat pengajuan SKM</button></a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>