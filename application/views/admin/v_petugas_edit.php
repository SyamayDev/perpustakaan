<div class="container mt-2">
    <div class="card shadow-lg border-0 rounded-lg">
        <div class="card-header text-center">
            <h4>Edit Petugas</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url('admin/petugas'); ?>"
                class="btn btn-sm btn-outline-secondary mb-4">
                <i class="fa fa-arrow-left mr-2"></i>Kembali
            </a><br><br>

            <?php foreach($petugas as $p) { ?>
                <form action="<?php echo base_url('admin/petugas_update'); ?>" method="post">
                    <div class="form-group">
                        <label class="font-weight-bold" for="nama">Nama Lengkap</label>
                        <input type="hidden" name="id" value="<?php echo $p->id; ?>" required>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $p->nama; ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold" for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $p->username; ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold" for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" value="<?php echo $p->password; ?>" required>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </form>
            <?php } ?>
        </div>
    </div>
</div>