<body>
    <a class="container mt-5">
        <h2>Invoice pesanan</h2>
        <table class="table table-bordered">
            <tr>
                <th>Nama Pelanggan</th>
                <td><?php echo $pesanan['nama_pelanggan']; ?></td>
            </tr>
            <tr>
                <th>Paket</th>
                <td><?php echo $pesanan['nama_menu']; ?></td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>Rp <?php echo number_format($pesanan['harga_menu'], 2); ?></td>
            </tr>
                <th>Quantity</th>
                <td><?php echo $pesanan['quantity']; ?></td>
            <tr>
                <th>Tanggal Pengiriman</th>
                <td><?php echo $pesanan['tanggal']; ?></td>
            </tr>
            <tr>
                <th>Alamat Pengiriman</th>
                <td><?php echo $pesanan['alamat']; ?></td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td><?php echo $pesanan['deskripsi_pesanan']; ?></td>
            </tr>
            <tr>
                <th>Total</th>
                <td>Rp <?php echo number_format($pesanan['harga_menu'] * $pesanan['quantity'], 2); ?></td>
            </tr>
        </table>
        <a class="btn btn-success" href="<?= base_url('pesanan/status_pesanan')?>">Selanjutnya</a>
    </div>
</body>