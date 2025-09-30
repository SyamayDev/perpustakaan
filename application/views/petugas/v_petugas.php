<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Data Petugas</h4>
        </div>
        <div class="card-body">

        <a href="<?php echo base_url('admin/petugas_tambah'); ?>" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus mr-2"></i>Petugas Baru</a>
        <br><br>

        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th width="1%">No</th>
                <th>Nama</th>
                <th>Username</th>
                <th width="16%">Opsi</th>
            </tr>
            <?php $no = 1; foreach($petugas as $p) { ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $p->nama; ?></td>
                <td><?php echo $p->username; ?></td>
                <td>
                    <a href="<?php echo base_url('admin/petugas_edit/'.$p->id); ?>" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                    <a href="<?php echo base_url('admin/petugas_hapus/'.$p->id); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </table>

        </div>
    </div>
</div>