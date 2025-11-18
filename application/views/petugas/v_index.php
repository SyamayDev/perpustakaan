<div class="container">
    <div class="jumbotron textcenter">
        <div class="col-sm-8 mx-auto">
            <h1>Selamat Datang!</h1>
            <p>Ini Merupakan Sistem Informasi Perpustakaan Hasil Dari <b>CodeIgniter</b></p>
            <p>Anda Telah Login Sebagai <b><?php echo $this->session->userdata('username'); ?></b> [petugas].</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h1>
                        <?php echo $this->m_data->get_data('buku')->num_rows(); ?>
                        <div class="pull-right">
                            <i class="fa fa-book"></i>
                        </div>
                    </h1>
                    Jumlah Buku
                </div>
            </div>
        </div>
        <!-- jumlah anggota -->
        <div class="col-md-3">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h1>
                        <?php echo $this->m_data->get_data('anggota')->num_rows(); ?>
                        <div class="pull-right">
                            <i class="fa fa-users"></i>
                        </div>
                    </h1>
                    Jumlah Anggota
                </div>
            </div>
        </div>
        <!-- jumlah total peminjaman -->
        <div class="col-md-3">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <h1>
                        <?php echo $this->m_data->get_data('peminjaman')->num_rows(); ?>
                        <div class="pull-right">
                            <i class="fa fa-exchange"></i>
                        </div>
                    </h1>
                    Jumlah Peminjaman
                </div>
            </div>
        </div>
        <!-- jumlah petugas -->
        <div class="col-md-3">
            <div class="card bg-danger text-white">
                <div class="card-body">
                    <h1>
                        <?php echo $this->m_data->get_data('petugas')->num_rows(); ?>
                        <div class="pull-right">
                            <i class="fa fa-user"></i>
                        </div>
                    </h1>
                    Jumlah Petugas
                </div>
            </div>
        </div>
    </div>

</div>