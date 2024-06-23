<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Pesanan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Laporan Pesanan</h2>
        <form action="<?php echo site_url('laporan/cetak'); ?>" method="post">
            <div class="form-group">
                <label for="start_date">Tanggal Mulai:</label>
                <input type="date" class="form-control" id="start_date" name="start_date" required>
            </div>
            <div class="form-group">
                <label for="end_date">Tanggal Selesai:</label>
                <input type="date" class="form-control" id="end_date" name="end_date" required>
            </div>
            <button type="submit" class="btn btn-primary">Cetak Laporan</button>
        </form>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Paket</th>
                    <th>Quantity</th>
                    <th>Tanggal Pengiriman</th>
                    <th>Alamat Pengiriman</th>
                    <th>Deskripsi</th>
                    <th>Total Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pesanan as $item): ?>
                    <tr>
                        <td><?php echo $item['nama_pelanggan']; ?></td>
                        <td><?php echo $item['nama_menu']; ?></td>
                        <td><?php echo $item['quantity']; ?></td>
                        <td><?php echo $item['tanggal']; ?></td>
                        <td><?php echo $item['alamat']; ?></td>
                        <td><?php echo $item['deskripsi_pesanan']; ?></td>
                        <td>Rp <?php echo number_format($item['harga_menu'] * $item['quantity'], 2); ?></td>
                        <td><?php echo $item['status']; ?></td>
                        
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
