<?php 
include_once 'header.php';
include_once 'database.php'; 
?>

<!-- Main Content - Checkout -->
<section class="pt-5 py-5 mt-5">
    <div class="container">
        <!-- Breadcrumb -->
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="index.php">CBeauty</a></li>
            <li class="breadcrumb-item active">Pembelian</li>
        </ol>
        </nav>
        <div class="row">
            <h4 class="mb-3 mt-3 fw-bolder">Daftar Pembelian</h4>
        </div>
        <div class="row my-4 mt-4">
            <div class="col-md-12">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Tanggal</th>
                            <th>Nama Produk</th>
                            <th>Alamat</th>
                            <th>Nomor HP</th>
                            <th>Email</th>
                            <th>Jumlah Produk</th>
                            <th>Deskripsi</th>
                            <th>ID Produk</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                     $data = $db->query("SELECT * FROM pesanan");
                    foreach ($data as $d):
                                        
                    ?>
                        <tr>
                            <td><img src="img/serum2.jpg" class="rounded-2" alt="" width="53"></td>
                            <td class="align-middle"><?= $d['id']; ?></td>
                            <td class="align-middle"><?= $d['tanggal']; ?></td>
                            <td class="align-middle fw-light"><?= $d['nama_pesanan']; ?></td>
                            <td class="align-middle"><?= $d['alamat_pesanan']; ?></td>
                            <td class="align-middle"><?= $d['no_hp']; ?></td>
                            <td class="align-middle"><?= $d['email']; ?></td>
                            <td class="align-middle text-center"><?= $d['jumlah_pesanan']; ?></td>
                            <td class="align-middle"><?= $d['deskripsi']; ?></td>
                            <td class="align-middle text-center"><?= $d['produk_id']; ?></td>
                            <td class="align-middle">
                                <a href="delete_pesanan_user.php?id=<?= $d['id']; ?>">
                                    <i class="bi bi-trash text-body-secondary"></i>
                                </a>
                            </td>
                        </tr>
                        <?php 
                        endforeach; 
                        ?>
                    </tbody>
                </table>
            </div>
    </div>
</section>

<hr class="mt-5 mw-5">

<!-- Footer -->
<div class="container">
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4">
  <div class="col-md-4 d-flex align-items-center">
    <a href="index.php" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
      <img src="img/CB.png" width="30" alt="Logo Footer Checkout CBeauty">
    </a>
    <span class="mb-3 mb-md-0 text-body-secondary fw-bolder">&copy; 2023 CBeauty, Inc</span>
  </div>
</footer>
</div>

  <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>