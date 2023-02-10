<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <style type="text/css">
        .table-data {
            width: 100%;
            border-collapse: collapse;
        }

        .table-data tr th,
        .table-data tr td {
            border: 1px solid black;
            font-size: 11pt;
            font-family: Verdana;
            padding: 10px 10px 10px 10px;
        }

        h3 {
            font-family: Verdana;
        }
    </style>
    <h3>
        <center>Laporan Barang Keluar</center>
    </h3>
    <br />
    <table class="table-data">
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>Tanggal</th>
                <th>Lokasi</th>
                <th>Customer</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Satuan</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($barangkeluar as $dd) {
            ?>
                <tr>
                <td><?=$dd['idtransaksi'];?></td>
                    <td><?=$dd['tanggal'];?></td>
                    <td><?=$dd['lokasi'];?></td>
                    <td><?=$dd['namacustomer'];?></td>
                    <td><?=$dd['alamat'];?></td>
                    <td><?=$dd['telepon'];?></td>
                    <td><?=$dd['kodebarang'];?></td>
                    <td><?=$dd['namabarang'];?></td>
                    <td><?=$dd['satuan'];?></td>
                    <td><?=$dd['jumlah'];?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>