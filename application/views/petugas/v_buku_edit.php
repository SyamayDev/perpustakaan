<div class="container mt-2">
    <div class="card shadow-lg border-0 rounded-lg">
        <div class="card-header text-center">
            <h4>Edit Anggota</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url('petugas/buku'); ?>"
                class="btn btn-sm btn-outline-secondary mb-4">
                <i class="fa fa-arrow-left mr-2"></i>Kembali
            </a><br><br>

            <?php foreach($buku as $b) { ?>
                <form action="<?php echo base_url('petugas/buku_update'); ?>" method="post">
                    <div class="form-group">
                        <label class="font-weight-bold" for="judul">Judul Buku</label>
                        <input type="hidden" name="id" value="<?php echo $b->id; ?>" required>
                        <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $b->judul; ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold" for="tahun">Tahun Terbit</label>
                        <input type="text" class="form-control" id="tahun" name="tahun" value="<?php echo $b->tahun; ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold" for="penulis">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis" value="<?php echo $b->penulis; ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="font-wight-bold" for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="1" <?php if($b->status == 1) echo 'selected'; ?>>Tersedia</option>
                            <option value="2" <?php if($b->status == 2) echo 'selected'; ?>>Sedang Terpinjam</option>
                        </select>
                    </div>  
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </form>
            <?php } ?>
        </div>
    </div>
</div>