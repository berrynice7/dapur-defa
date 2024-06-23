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
              <li class="breadcrumb-item"><a href="<?= base_url('admin')?>">Dashboard</a></li>
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
				<a href="<?= base_url("admin/pelanggan_add") ?>" class="btn btn-lg btn-info">Tambah <i class="fas fa-plus pl-3"></i></a>
			</div>
                <table id="example2" class="table table-bordered table-hover">
                  <thead> 
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>No Telp.</th>
                      <th>ALamat</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $id_pelanggan = 1;

                    foreach ($pelanggan as $pelanggan) {
                      ?>
                      <tr>
                        <th>
                          <?= $id_pelanggan ?>
                        </th>
                        <th>
                          <?= $pelanggan->nama_pelanggan ?>
                        </th>
                        <th>
                          <?= $pelanggan->email ?>
                        </th>
                        <th>
                          <?= $pelanggan->no_telp ?>
                        </th>
                        <th>
                          <?= $pelanggan->alamat ?>
                        </th>
                        <th>
                        <a href="<?= base_url("admin/pelanggan_edit/") . $pelanggan->id_pelanggan ?>" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                          <a href="<?= base_url("admin/pelanggan_delete/") . $pelanggan->id_pelanggan ?>" class="btn btn-sm btn-danger"><i

                          class="fas fa-trash"></i></a>
                        </th>
                      </tr>

                      <?php
                      $no++;
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