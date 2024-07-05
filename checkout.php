<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | CBeauty</title>

    <!-- Favicon-->
    <link rel="icon" href="img/CB.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Bootstrap Core CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Core theme CSS & Bootstrap -->
    <link rel="stylesheet" href="css/styles_2.css">
</head>
<body style="background-color: #fff9fa;">

<!-- Header-->
<header class="py-3 mb-3 fixed-top border-bottom" style="background-color: #fff9fa;">
    <div class="container d-grid gap-3 align-items-center" style="grid-template-columns: 0.5fr 1.5fr 1fr;">
        <div class="col mb-2 mb-lg-0 d-flex align-items-center link-dark">
            <a href="home.php">
                <img src="img/CBeauty.png" alt="Logo Sea Beauty" class="bi me-2" width="110" height="30">
            </a>
        </div>
    </div>
</header>

<?php include_once 'database.php'; 
$id = $_GET['id'];
$data = $db->prepare("SELECT * FROM produk WHERE id = ?");
$data->execute([$id]);
$d = $data->fetch(PDO::FETCH_ASSOC);

?>



<!-- Main Content - Checkout -->
<section>
<div class="container">
<main>
    <div class="py-5 mt-5 text-center">
      <h2>Checkout</h2>
    </div>

    <form action="proses_beli.php" method="POST" class="needs-validation" novalidate>
        <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">Pesanan</span>
            <span class="badge bg-primary rounded-pill">1</span>
            </h4>
            <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                <h6 class="my-0"><?= $d['nama']; ?></h6>
                </div>
                <span class="text-body-secondary">Rp<?= $d['harga_jual']; ?></span>
            </li>
            <li class="list-group-item justify-content-between lh-sm">
                <div>
                <h6 class="my-0"><label for="produk_id" class="form-label">ID Produk</label></h6>
                <select class="form-select" id="produk_id" name="produk_id" required>
                <?php
                    $data = $db->query("SELECT * FROM produk");
                    foreach ($data as $d) {
                        echo "<option value='{$d['id']}'>{$d['id']}</option>";
                    }
                    ?>
                </select>
                </div>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
                <div class="text-danger">
                <h6 class="my-0">Total Diskon</h6>
                </div>
                <span class="text-danger">Rp0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <span>Total Pembayaran</span>
                <strong>Rp<?= $d['harga_jual']; ?></strong>
            </li>
            </ul>

            <form class="card p-2">
            <div class="input-group">
                <input type="text" class="form-control border-success-subtle" placeholder="Voucher">
                <button type="button" class="btn btn-outline-success">Pakai</button>
            </div>
            </form>
        </div>
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Alamat Pengiriman</h4>
            <div class="row g-3">
                <div class="col-sm-6">
                <label for="firstName" class="form-label">Nama Depan</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                    Valid first name is required.
                </div>
                </div>

                <div class="col-sm-6">
                <label for="lastName" class="form-label">Nama Belakang</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                    Valid last name is required.
                </div>
                </div>

                <div class="col-sm-6">
                <label for="no_hp" class="form-label">No. Handphone</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Handphone" required>
                <div class="invalid-feedback">
                    Your handphone is required.
                    </div>
                </div>
                </div>

                <div class="col-sm-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
                </div>

                <div class="col-12">
                <label for="tanggal" class="form-label">Tanggal Pemesanan</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Product Name" required>
                <div class="invalid-feedback">
                    Silakan masukkan tanggal pemesanan.
                </div>
                </div>

                <div class="col-12">
                <label for="nama_pesanan" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="nama_pesanan" name="nama_pesanan" placeholder="Product Name" required>
                <div class="invalid-feedback">
                    Silakan masukkan nama barang pesanan.
                </div>
                </div>

                <div class="col-12">
                <label for="jumlah_pesanan" class="form-label">Jumlah Pesanan</label>
                <div class="input-group has-validation">
                    <input type="number" class="form-control" id="jumlah_pesanan" name="jumlah_pesanan" placeholder="" required>
                <div class="invalid-feedback">
                    Silakan isi jumlah pesanan.
                    </div>
                </div>
                </div>

                <div class="col-12">
                <label for="alamat_pesanan" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat_pesanan" name="alamat_pesanan" placeholder="1234 Main St" required>
                <div class="invalid-feedback">
                    Please enter your shipping address.
                </div>
                </div>

                <div class="col-12">
                <label for="deskripsi" class="form-label">Deskripsi <span class="text-body-secondary">(Opsional)</span></label>
                <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="10" placeholder="Tambahkan deskripsi"></textarea>
                </div>

            <hr class="my-4">

            <h4 class="mb-3">Pembayaran</h4>

            <div class="row gy-3">
                <div class="col-12">
                <label for="cc-name" class="form-label">Metode Pembayaran</label>
                <select class="form-select" id="state" required>
                    <option value="">Pilih...</option>
                    <option>COD</option>
                    <option>Transfer Bank</option>
                    <option>Paypal</option>
                    <option>Kartu Kredit</option>
                    <option>Indomaret</option>
                </select>
                <div class="invalid-feedback">
                    Name on card is required
                </div>
                </div>

            <hr class="my-4">

            <button class="w-100 btn btn-success btn-lg" type="submit" name="submit">Bayar <i class="bi bi-patch-check"></i></button>

        </div>
        </div>
    </form>
  </main>

</div>
</section>

  
  <hr class="mt-5 mw-5">

  <!-- Footer -->
  <div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4">
    <div class="col-md-4 d-flex align-items-center">
      <a href="home.php" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
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