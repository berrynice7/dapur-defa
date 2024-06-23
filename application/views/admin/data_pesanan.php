<!-- content -->
<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Pelanggan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Pelanggan</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tabel Pelanggan</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="d-flex mb-4">
                                    <a href="<?= base_url("admin/laporan/cetak") ?>" class="btn btn-lg btn-info">Cetak
                                        <i class="fas fa-plus pl-3"></i></a>
                                </div>
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID Pesanan</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Paket</th>
                                            <th>Quantity</th>
                                            <th>Tanggal Pengiriman</th>
                                            <th>Alamat Pengiriman</th>
                                            <th>Deskripsi</th>
                                            <th>Total Harga</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        foreach ($pesanan as $item) {
                                            ?>
                                            <tr>
                                                <th>
                                                    <?= $id_pesanan ?>
                                                </th>
                                                <th>
                                                    <?= $item->nama_pelanggan ?>
                                                </th>
                                                <th>
                                                    <?= $item->nama_menu ?>
                                                </th>
                                                <th>
                                                    <?= $item->quantity ?>
                                                </th>
                                                <th>
                                                    <?= $item->tanggal ?>
                                                </th>
                                                <th>
                                                    <?= $item->alamat ?>
                                                </th>
                                                <th>
                                                    <?= $item->deskripsi_pemesanan ?>
                                                </th>
                                                <th>
                                                    Rp
                                                    <?php echo number_format($item['harga_menu'] * $item['quantity'], 2); ?>
                                                </th>
                                                <th>
                                                </th>
                                            </tr>

                                            <?php
                                            ;
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </section>


    <div class="container mt-5">
        <h2>Daftar Pesanan Admin</h2>
        <a href="<?php echo site_url('admin/pesanan/cetak'); ?>" class="btn btn-primary mb-3">Cetak PDF</a>
        <table class="table table-bordered">
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
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>