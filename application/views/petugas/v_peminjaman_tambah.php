<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4>Proses Transaksi Peminjaman Buku</h4>
        </div>
        <div class="card-body">

        <a href="<?php echo base_url('petugas/peminjaman') ?>" 
        class="btn btn-sm btn-light btn-outline-dark pull-right"><i class="fa fa-arrow-left"></i> Kembali</a>
        <br><br>

        <form action="<?php echo base_url('petugas/peminjaman_aksi') ?>" method="post">
            <div class="form-group">
                <label class="font-weight-bold" for="buku">Pilih Buku</label>
                <select class="form-control select2" name="buku">
                    <option value="">-- Pilih Buku --</option>
                    <?php foreach($buku as $b) { ?>
                        <option value="<?php echo $b->id; ?>"><?php echo $b->judul. ' | '.$b->tahun. ' | '.$b->penulis; ?></option>    
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label class="font-weight-bold" for="anggota">Pilih Anggota</label>
                <select class="form-control select2" name="anggota">
                    <option value="">-- Pilih Anggota --</option>
                    <?php foreach($anggota as $a) { ?>
                        <option value="<?php echo $a->id; ?>"><?php echo $a->nama. ' | '.$a->nik; ?></option>    
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal_mulai" class="font-weight-bold">Tanggal Mulai</label>
                <input type="date" class="form-control" name="tanggal_mulai" placeholder="Masukkan Tanggal Mulai Pinjam">
            </div>
            <div class="form-group">
                <label for="tanggal_sampai" class="font-weight-bold">Tanggal Pinjam Sampai</label>
                <input type="date" class="form-control" name="tanggal_sampai" placeholder="Masukkan Tanggal Pinjam Sampai">
            </div>
            <input type="submit" class="btn btn-primary" value="Simpan">
        </form>
        </div>
    </div>
</div>