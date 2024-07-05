<?php
include_once 'header.php';
include_once 'database.php';
?>
<?php
$id = $_GET['id'];
$data = $db->query("SELECT * FROM produk WHERE id = $id");
$d = $data->fetch(PDO::FETCH_ASSOC);
?>

<!-- Product section-->
    <section class="py-5 mt-4">
            <div class="container px-4 px-lg-5 my-5">
                <!-- Breadcrumb -->
                <nav class="mb-4" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="index.php">CBeauty</a></li>
                    <li class="breadcrumb-item active">Detail Produk</li>
                </ol>
                </nav>
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6">
                        <img class="card-img-top mb-5 mb-md-0" src="img/serum2.jpg" width="500"  alt="<?= $d['nama']; ?>" />
                    </div>
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder"><?= $d['nama']; ?></h1>
                        <div class="fs-5 mb-4 mt-5">
                            <span>Rp<?= $d['harga_jual']; ?></span>
                        </div>
                        <p class="lead"><?= $d['deskripsi']; ?></p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="jumlah_pesanan" name="jumlah_pesanan" type="num" value="1" style="max-width: 3rem" />
                            <form action="checkout.php" method="GET">
                                <input type="hidden" name="id" value="<?= $d['id']; ?>">
                                <button class="btn btn-outline-dark flex-shrink-0" type="submit">
                                    <i class="bi-bag-fill me-1"></i>
                                    Beli
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Related items section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Related Products</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="img/produk/serumm.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Awaskin Retinol Serum</h5>
                                    <!-- Product price-->
                                    Rp149.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Beli</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="img/produk/cushionn.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">GnB Blossom Cushion</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">Rp189.000</span>
                                    Rp159.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Beli</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="img/produk/moistt.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Poko Yul Hydrating Moisturiser</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">Rp180.000</span>
                                    Rp150.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Beli</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="img/produk/lip.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Lippo Lip Velvet</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    Rp69.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Beli</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php include_once 'footer.php'; ?>