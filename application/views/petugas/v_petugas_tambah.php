<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-lg">
        <div class="card-header text-center">
            <h4 class="mb-0">Tambah Petugas Baru</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url('admin/petugas'); ?>" 
               class="btn btn-sm btn-outline-secondary mb-4">
               <i class="fa fa-arrow-left mr-2"></i>Kembali
            </a>

            <form action="<?php echo base_url('admin/petugas_tambah_aksi'); ?>" method="post">
                <div class="form-group mb-3">
                    <label class="font-weight-bold" for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" 
                           placeholder="Masukkan Nama Lengkap" required>
                </div>
                <div class="form-group mb-3">
                    <label class="font-weight-bold" for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" 
                           placeholder="Masukkan Username" required>
                </div>
                <div class="form-group mb-4">
                    <label class="font-weight-bold" for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" 
                           placeholder="Masukkan Password" required>
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
