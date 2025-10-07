<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-lg">
        <div class="card-header text-center">
            <h4 class="mb-0">Tambah Anggota Baru</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url('petugas/anggota'); ?>"
                class="btn btn-sm btn-outline-secondary mb-4">
                <i class="fa fa-arrow-left mr-2"></i>Kembali
            </a>

            <form action="<?php echo base_url('petugas/anggota_tambah_aksi'); ?>" method="post">
                <div class="form-group mb-3">
                    <label class="font-weight-bold" for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama"
                        placeholder="Masukkan Nama Lengkap" required>
                </div>
                <div class="form-group mb-3">
                    <label class="font-weight-bold" for="nik">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik"
                        placeholder="Masukkan NIK" required>
                </div>
                <div class="form-group mb-3">
                    <label class="font-weight-bold" for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat"
                        placeholder="Masukkan Alamat" required></textarea>
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