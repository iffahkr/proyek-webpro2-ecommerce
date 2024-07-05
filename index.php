<?php
include_once 'header.php';
include_once 'database.php';

$data = $db->query("SELECT * FROM produk");
?>
        <!-- Main Content -->
        <!-- Kategori -->
        <section>
        <div class="container" style="margin-top: 7rem;">
          <div class="row">
            <div class="d-flex">
              <span class="bi bi-sun-fill text-warning" style="margin-right: 5px;"></span>
              <h4>Kategori</h4>
              <span class="bi bi-sun-fill text-warning" style="margin-left: 5px;"></span>
            </div>
          </div>
          <div class="row justify-content-between gap-5 my-4 mx-4">
            <div class="col">
              <button type="button" class="btn btn-outline-warning">
                <i class="bi bi-star-fill"></i>
              </button>
              <p class="mt-2">Deals</p>
            </div>
            <div class="col">
              <button type="button" class="btn btn-outline-danger">
                <i class="bi bi-suit-heart"></i>
              </button>
              <p class="mt-2">Serum</p>
            </div>
            <div class="col">
              <button type="button" class="btn btn-outline-danger">
                <i class="bi bi-droplet"></i>
              </button>
              <p class="mt-2">Toner</p>
            </div>
            <div class="col">
              <button type="button" class="btn btn-outline-danger">
                <i class="bi bi-cloudy"></i>
              </button>
              <p class="mt-2">Moist</p>
            </div>
            <div class="col">
              <button type="button" class="btn btn-outline-danger">
                <i class="bi bi-egg-fried"></i>
              </button>
              <p class="mt-2">Mask</p>
            </div>
            <div class="col">
              <button type="button" class="btn btn-outline-danger">
                <i class="bi bi-flower1"></i>
              </button>
              <p class="mt-2">Powder</p>
            </div>
            <div class="col">
              <button type="button" class="btn btn-outline-danger">
                <i class="bi bi-suit-club"></i>
              </button>
              <p class="mt-2">Lippie</p>
            </div>
          </div>
        </div>

        <!-- Carousel -->
        <section style="margin-top: 3rem;">
          <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" style="width: 85%; height: 70%; margin: auto;">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner rounded-3">
              <div class="carousel-item active">
                <a href="#">
                  <img src="img/autumn.png" alt="img-carousel-1" width="100%" height="100%">
                </a>
              </div>
              <div class="carousel-item">
                <a href="#">
                  <img src="img/skincare.png" alt="img-carousel-2" width="100%" height="100%">
                </a>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </section>

        <!-- Top Deals -->
        <div class="container" style="margin-top: 4rem;">
          <div class="row">
            <div class="d-flex">
              <span class="bi bi-stars text-warning" style="margin-right: 5px;"></span>
              <h4>Produk</h4>
              <span class="bi bi-stars text-warning" style="margin-left: 5px;"></span>
            </div>
          </div>
          <div class="row mt-2">
            <div class="container px-4 px-lg-5 mt-4">
              <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                <!-- Fungsi untuk menampilkan produk secara berurutan menggunakan query string id -->
                <?php foreach ($data as $d) { ?>
                  <div class="col mb-5">
                      <div class="card h-100 shadow">
                          <!-- Product image-->
                          <img class="card-img-top" src="img/produk/serumm2.png" alt="<?= $d['nama']; ?>" />
                          <!-- Product details-->
                          <div class="card-body p-4">
                              <div class="text-center">
                                  <!-- Product name-->
                                  <h5 class="fw-bolder"><?= $d['nama']; ?></h5>
                                  <!-- Product reviews-->
                                  <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                  </div>
                                  <!-- Product price-->
                                  <?= $d['harga_jual']; ?>
                              </div>
                          </div>
                          <!-- Product actions-->
                          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-danger mt-auto" href="detail_produk.php?id=<?= $d['id']; ?>">Lihat Detail</a></div>
                          </div>
                      </div>
                  </div>
                <?php } ?>
                
              </div>
          </div>
        </div>
        </section>
        
<?php include_once 'footer.php'; ?>