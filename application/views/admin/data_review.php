<!-- content -->
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Review</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('admin')?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Review</li>
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
			</div>
                <table id="example2" class="table table-bordered table-hover">
                  <thead> 
                    <tr>
                      <th>No</th>
                      <th>ALamat</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $id_review = 1;

                    foreach ($review as $review) {
                      ?>
                      <tr>
                        <th>
                          <?= $id_review ?>
                        </th>
                        <th>
                          <?= $review->ulasan ?>
                        </th>
                        <th>
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