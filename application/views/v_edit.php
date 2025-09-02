<!DOCTYPE html>
<html>
<head>
    <title>Edit Karyawan</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="mb-4 text-center">Edit Karyawan</h2>
    <?php foreach($karyawan as $u){ ?>
    <form method="post" action="<?php echo site_url('crud/update'); ?>">
        <input type="hidden" name="id" value="<?php echo $u->id ?>">
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" value="<?php echo $u->nama ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" value="<?php echo $u->email ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Departemen</label>
            <input type="text" name="departemen" value="<?php echo $u->departemen ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Posisi</label>
            <input type="text" name="posisi" value="<?php echo $u->posisi ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Gaji</label>
            <input type="number" name="gaji" value="<?php echo $u->gaji ?>" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
        <a href="<?php echo site_url('crud'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
    <?php } ?>
</div>
</body>
</html>
