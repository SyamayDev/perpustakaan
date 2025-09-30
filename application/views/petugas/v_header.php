<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Admin-SI Perpustakaan</title>
    <!-- css bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
    <!-- css datatables -->
    <link rel="stylesheet" href="<?php echo base_url('assets/DataTables/datatables.css'); ?>">
    <!-- icon font awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/awesome/css/font-awesome.css'); ?>">
    <!-- jquery dan boostrap js -->
    <script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
    <!-- js datatables -->
    <script src="<?php echo base_url('assets/DataTables/datatables.js'); ?>"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo base_url('admin'); ?>">SI Perpustakaan</a>
        <button class="navbar-toggler" type="button" data-target="#navbarText"" data-toggle="collapse" aria-controls="navbartext" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>  

        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="<?php echo base_url('admin'); ?>" class="nav-link"><i class="fa fa-home mr-2"></i>Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/petugas'); ?>" class="nav-link"><i class="fa fa-user mr-2"></i>Petugas</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/anggota'); ?>" class="nav-link"><i class="fa fa-users mr-2"></i>Anggota</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/peminjaman_laporan'); ?>" class="nav-link"><i class="fa fa-book mr-2"></i>Laporan Peminjaman</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/ganti_password'); ?>" class="nav-link"><i class="fa fa-lock mr-2"></i>Ganti Password</a>
                </li>
            </ul>

            <span class="navbar-text mr-3 text-center">Halo, Selamat Datang <?php echo $this->session->userdata('username'); ?></span>
            <a href="<?php echo base_url('admin/logout'); ?>" class="btn btn-outline-light ml-1"><i class="fa fa-sign-out mr-2"></i>Logout</a>
        </div>
    </div>
</nav>
    