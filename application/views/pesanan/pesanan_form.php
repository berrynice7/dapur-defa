<body>
    <div class="container mt-5">
        <h2>Form Pemesanan</h2>
        <?php echo validation_errors(); ?>
        <?php echo form_open('pesanan/create'); ?>

        <div class="form-group">
            <label for="nama_pelanggan">Nama Pelanggan</label>
            <input type="text" class="form-control" name="nama_pelanggan" required>
        </div>

        <div class="form-group">
            <label for="id_menu">Pilih Paket</label>
            <select class="form-control" name="id_menu" required>
                <?php foreach ($menu as $item): ?>
                    <option value="<?php echo $item['id_menu']; ?>"><?php echo $item['nama_menu']; ?> (Rp <?php echo number_format($item['harga_menu'], 2); ?>)</option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" name="quantity" required>
        </div>

        <div class="form-group">
            <label for="tanggal">Tanggal Pengiriman</label>
            <input type="date" class="form-control" name="tanggal" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat Pengiriman</label>
            <textarea class="form-control" name="alamat" required></textarea>
        </div>

        <div class="form-group">
            <label for="deskripsi_pesanan">Deskripsi</label>
            <textarea class="form-control" name="deskripsi_pesanan"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Kirim</button>

        </form>
    </div>
</body>