<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cetak kartu anggota</title>
    <style type="text/css">
        .card{
        border:1px solid #000;
        width:450px;
        }
        .card-header{
        border-bottom: 1px solid #000;
        text-align:center;
        font-weight:bold;
        padding:10px;
        }
        .card-body{
        padding:10px;
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="card-header">
            KARTU ANGGOTA PERPUSTAKAAN SMK TRITECH INFORMATIKA
        </div>

        <div class="card-body">
            <div class="container">
                <table class="table table-borderless table-sm fs-2">
                    <?php $no = 1;
                    foreach($anggota as $a){
                    ?>
                    <tr>
                        <td width="30%">Nomor</td>
                        <td width="5%">:</td>
                        <td><?php echo 100000+$a->id; ?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?php echo $a->nama; ?></td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td><?php echo $a->nik; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?php echo $a->alamat; ?></td>
                    </tr>

                    <?php } ?>
                </table>
            </div>
        </div>

    </div>
    
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>