<body>

<div class="container-fluid padding">
    <div class="row welcome text-center welcome">
        <div class="col-12">
            <h1 class="display-4">Daftar Paket</h1>
        </div>
        <hr>
    </div>
</div>
<div class="container text-center padding dish-card">
    <div class="row container">
        <?php if(!empty($menu)) { ?>
        <?php foreach($menu as $item) { ?>
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
            <div class="card mb-4 shadow-sm">
            <img class="card-img-top" src="data:image/jpeg;base64,<?php echo base64_encode($item['foto_menu']); ?>" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $item['nama_menu']; ?></h4>
                    <p class="card-text mb-0"><?php echo $item['harga_menu']; ?></p>
                    <hr>
                    <p class="card-text mb-0"></p>
                    <p class="card-text mb-0">Deskripsi</p>
                    <p class="card-text mb-0"><?php echo $item['deskripsi_menu']; ?></p>
                    <hr>
                    <a href="<?= base_url('pesanan')?>;" class="btn btn-success btn-md">Pesan</a>
                    <br>
                    <br>
                    <a href="https://wa.me/+6285697060482?text=Halo,%20saya%20ingin%20memesan%20paket%20<?php echo urlencode($item['nama_menu']); ?>." class="btn btn-success">Pesan via WhatsApp</a>
                    
                </div>
            </div>
        </div>
        <?php } ?>
        <?php } else { ?>
        <h1>No records found</h1>
        <?php } ?>
    </div>
</div>
</body>