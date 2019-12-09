        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?= base_url() ?>assets/images/slider1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?= base_url() ?>assets/images/slider2.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">
            <?php foreach ($barang as $brg) : ?>
              <div class="card m-3" style="width: 320px; height:470px;">
                <img src="<?= base_url('assets/uploads/') . $brg['gambar_brg'] ?>" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title"><?= $brg['nama_brg']; ?></h5>
                  <p class="card-text text-truncate"><?= $brg['keterangan_brg']; ?></p>
                  <small class="badge badge-secondary text-wrap mb-3">Rp <?= number_format($brg['harga_brg'], 0, ",", "."); ?></small><br>

                  <?= anchor('dashboard/addToCart/' . $brg['id_brg'], '<div class="btn btn-block btn-warning font-weight-bold mb-2">Add to cart</div>') ?>
                  <a href="#" class="btn btn-block btn-secondary">Details</a>

                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->