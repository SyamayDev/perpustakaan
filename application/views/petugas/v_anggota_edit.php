<div class="container mt-2">
    <div class="card shadow-lg border-0 rounded-lg">
        <div class="card-header text-center">
            <h4>Edit Anggota</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url('petugas/anggota'); ?>"
                class="btn btn-sm btn-outline-secondary mb-4">
                <i class="fa fa-arrow-left mr-2"></i>Kembali
            </a><br><br>

            <?php foreach($anggota as $a) { ?>
                <form action="<?php echo base_url('petugas/anggota_update'); ?>" method="post">
                    <div class="form-group">
                        <label class="font-weight-bold" for="nama">Nama Lengkap</label>
                        <input type="hidden" name="id" value="<?php echo $a->id; ?>" required>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $a->nama; ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold" for="nik">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $a->nik; ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold" for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $a->alamat; ?>" required>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </form>
            <?php } ?>
        </div>
    </div>
</div>