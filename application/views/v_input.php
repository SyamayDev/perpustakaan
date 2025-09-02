<!DOCTYPE html>
<html>
<head>
    <title>Tambah Karyawan</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="mb-4 text-center">Tambah Karyawan</h2>
    <form method="post" action="<?php echo site_url('crud/tambah_aksi'); ?>">
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Departemen</label>
            <input type="text" name="departemen" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Posisi</label>
            <input type="text" name="posisi" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Gaji</label>
            <input type="number" name="gaji" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="<?php echo site_url('crud'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>
