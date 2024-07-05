<?php 
include_once('sidebar.php');
include_once('header.php'); 
include_once('database.php');
?>

<div class="container-fluid">
<!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-900">Produk</h1>

                    <!-- DataTales -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3" style="background-color: #efc9c9;">
                            <h6 class="m-0 font-weight-bold text-primary">Kelola Produk</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"">
                                    <thead class="text-gray-900">
                                        <tr>
                                            <th>ID</th>
                                            <th>Kode</th>
                                            <th>Nama Produk</th>
                                            <th>Harga Jual</th>
                                            <th>Harga Beli</th>
                                            <th>Stok</th>
                                            <th>Stok Minimal</th>
                                            <th>Deskripsi</th>
                                            <th>Kategori Produk</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $data = $db->query("SELECT * FROM produk");
                                        foreach ($data as $d):
                                        
                                        ?>
                                    <tr class="text-gray-800">
                                        <td><?= $d['id']; ?></td>
                                        <td><?= $d['kode']; ?></td>
                                        <td><?= $d['nama']; ?></td>
                                        <td><?= $d['harga_jual']; ?></td>
                                        <td><?= $d['harga_beli']; ?></td>
                                        <td><?= $d['stok']; ?></td>
                                        <td><?= $d['min_stok']; ?></td>
                                        <td><?= $d['deskripsi']; ?></td>
                                        <td><?= $d['kategori_produk_id']; ?></td>
                                        <td>
                                            <ul class="d-flex justify-align-center" style="list-style-type: none;">
                                                <li class="ml-0">
                                                    <a href="form_update_produk.php?id=<?= $d['id']; ?>">
                                                    <i class="fas fa-pen" style="color: #e2d0d0;"></i></a>
                                                </li>
                                                <li class="ml-3">
                                                    <a href="delete_produk.php?id=<?= $d['id']; ?>">
                                                    <i class="fas fa-trash" style="color: #e2d0d0;"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                        
                                    </tr>
                                        <?php

                                        endforeach;

                                        ?>
                                    </tbody>
                                </table>
                                <a href="form_produk.php" class="btn btn-info mt-4">Tambah Produk</a>
                            </div>
                        </div>
                        <div class="card-footer" style="background-color: #efc9c9;">
                            <ul class="pagination pagination-md m-0 float-right">
                                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </div>

</div>
<?php include_once('footer.php'); ?>
