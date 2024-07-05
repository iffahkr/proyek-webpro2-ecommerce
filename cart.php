<?php
include_once 'header.php';
include_once 'database.php';
?>

<section class="pt-5 mt-5 py-5">
<div class="container">
    <div class="row">
        <h4 class="mb-3 mt-3 fw-bolder">Keranjang</h4>
    </div>
    <div class="row my-4 mt-4">
        <div class="col-12 col-lg-8">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th></th>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="img/serum2.jpg" class="rounded-2" alt="" width="53"></td>
                        <td class="align-middle fw-light">
                            <a class="text-decoration-none" href="detail_produk.php">
                                <p>Samthinc Acne Serum</p>
                            </a>
                        </td>
                        <td class="align-middle"><h6>Rp89.000</h6></td>
                        <td class="align-middle">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="2" style="max-width: 3rem" />
                        </td>
                        <td class="align-middle"><h6>Rp178.000</h6></td>
                        <td class="align-middle">
                            <a href="#"><i class="bi bi-trash text-body-secondary"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="img/moist.jpg" class="rounded-2" alt="" width="53"></td>
                        <td class="align-middle fw-light">
                            <a class="text-decoration-none" href="detail_produk.php">
                                <p>Poko Yul Hydrating Moisturiser</p>
                            </a>
                        </td>
                        <td class="align-middle"><h6>Rp150.000</h6></td>
                        <td class="align-middle">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                        </td>
                        <td class="align-middle"><h6>Rp150.000</h6></td>
                        <td class="align-middle">
                            <a href="#"><i class="bi bi-trash text-body-secondary"></i></a>
                        </td>
                    </tr>
                    <tr height="50">
                      <td class="align-middle fw-bold" colspan="4">Total Harga:</td>
                      <td class="align-middle fw-bold">Rp328.000</td>
                      <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-12 col-lg-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-between-center mb-3">
                    <h5 class="card-title mb-0 fw-bolder">Ringkasan Belanja</h5>
                  </div><select class="form-select mb-3" aria-label="delivery type">
                    <option value="cod">Cash on Delivery</option>
                    <option value="card">Transfer Bank</option>
                    <option value="paypal">CPay</option>
                  </select>
                  <div>
                    <div class="d-flex justify-content-between">
                      <p class="text-900 fw-semi-bold">Total Harga (3 barang) :</p>
                      <p class="text-1100 fw-semi-bold">Rp328.000</p>
                    </div>
                    <div class="d-flex justify-content-between">
                      <p class="text-900 fw-semi-bold">Total Diskon :</p>
                      <p class="text-danger fw-semi-bold">Rp0</p>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <input class="form-control" type="text" placeholder="Ayo pakai voucher" />
                    <button class="btn btn-secondary px-4">Pakai</button>
                </div>
                <hr>
                  <div class="d-flex justify-content-between border-y py-2 mb-3">
                    <h5 class="mb-0">Total Harga :</h5>
                    <h5 class="mb-">Rp328.000</h5>
                  </div>
                  <button class="btn btn-success w-100">
                    <a href="checkout.php" class="text-decoration-none text-light">Beli (2)</a>
                </button>
                </div>
              </div>
            </div>
          </div>
        <!-- <div class="col-4">

        </div> -->
    </div>
</div>
</section>

<?php include_once 'footer.php'; ?>