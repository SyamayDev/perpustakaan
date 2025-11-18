<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h1>Data Anggota</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover table-datatable">
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Alamat</th>
                            <th width="10%">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        foreach($anggota as $a) {
                        ?>
                        <tr>
                            <td></td><?php echo $no++; ?></td>
                            <td><?php echo $a->nama; ?></td>
                            <td><?php echo $a->nik; ?></td>
                            <td><?php echo $a->alamat; ?></td>
                            <td>
                                <a target="_blank" href="<?php echo base_url('admin/anggota_kartu/' .$a->id); ?>" class="btn btn-primary btn-sm"><i class="fa fa-address-card"></i> Cetak Kartu</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>