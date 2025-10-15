<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-lg">
        <div class="card-header text-center">
            <h4 class="mb-0">Tambah Buku Baru</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url('petugas/buku'); ?>"
                class="btn btn-sm btn-outline-secondary mb-4">
                <i class="fa fa-arrow-left mr-2"></i>Kembali
            </a>

            <form action="<?php echo base_url('petugas/buku_tambah_aksi'); ?>" method="post">
                <div class="form-group mb-3">
                    <label class="font-weight-bold" for="judul">Judul Buku</label>
                    <input type="text" class="form-control" id="judul" name="judul"
                        placeholder="Masukkan Judul Lengkap" required>
                </div>
                <div class="form-group mb-3">
                    <label class="font-weight-bold" for="tahun">Tahun Terbit</label>
                    <input type="text" class="form-control" id="tahun" name="tahun"
                        placeholder="Masukkan Tahun" required>
                </div>
                <div class="form-group mb-3">
                    <label class="font-weight-bold" for="penulis">Penulis Buku</label>
                    <textarea class="form-control" id="penulis" name="penulis"
                        placeholder="Masukkan Penulis" required></textarea>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-save mr-2"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>