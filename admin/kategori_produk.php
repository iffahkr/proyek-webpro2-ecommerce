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
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Kategori Produk</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="text-gray-900" style="background-color: #efc9c9;">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Kategori</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $data = $db->query("SELECT * FROM kategori_produk");
                                    foreach ($data as $d):

                                    ?>
                                    <tr class="text-gray-800">
                                        <td><?= $d['id']; ?></td>
                                        <td><?= $d['nama']; ?></td>
                                        
                                    </tr>
                                        <?php

                                        endforeach;

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer" style="background-color: #efc9c9;">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </div>

</div>
<?php include_once('footer.php'); ?>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
