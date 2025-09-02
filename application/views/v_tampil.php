<!DOCTYPE html>
<html>
<head>
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body class="bg-light">

<div class="container mt-4">
    <h2 class="mb-4 text-center">Data Karyawan</h2>
    <a href="<?php echo site_url('crud/tambah'); ?>" class="btn btn-primary mb-3">+ Tambah Data</a>
    <table class="table table-striped table-hover table-bordered">
        <tr class="table-dark">
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Departemen</th>
            <th>Posisi</th>
            <th>Gaji</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($karyawan as $u){ ?>
        <tr>
            <td><?php echo $u->id ?></td>
            <td><?php echo $u->nama ?></td>
            <td><?php echo $u->email ?></td>
            <td><?php echo $u->departemen ?></td>
            <td><?php echo $u->posisi ?></td>
            <td><?php echo number_format($u->gaji,0,",",".") ?></td>
            <td>
                <a href="<?php echo site_url('crud/edit/'.$u->id); ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="<?php echo site_url('crud/hapus/'.$u->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>
