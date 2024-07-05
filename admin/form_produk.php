<?php 
include_once('sidebar.php');
include_once('header.php'); 
include_once 'database.php';
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="h3 mb-2 text-gray-900">Produk</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3" style="background-color: #efc9c9;">
                            <h6 class="m-0 font-weight-bold text-primary">Masukkan Produk</h6>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12 mt-4">
                                        <form method="POST" action="proses_produk.php">
                                            <div class="form-group row">
                                                <label for="id" class="col-4 col-form-label">ID</label> 
                                                <div class="col-8">
                                                <div class="input-group">
                                                    <input id="id" name="id" type="text" class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="kode" class="col-4 col-form-label">Kode</label> 
                                                <div class="col-8">
                                                <div class="input-group">
                                                    <input id="kode" name="kode" type="text" class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="nama" class="col-4 col-form-label">Nama Produk</label> 
                                                <div class="col-8">
                                                <div class="input-group">
                                                    <input id="nama" name="nama" type="text" class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label> 
                                                <div class="col-8">
                                                <div class="input-group">
                                                    <input id="harga_jual" name="harga_jual" type="text" class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label> 
                                                <div class="col-8">
                                                <div class="input-group">
                                                    <input id="harga_beli" name="harga_beli" type="text" class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="stok" class="col-4 col-form-label">Stok</label> 
                                                <div class="col-8">
                                                <div class="input-group">
                                                    <input id="stok" name="stok" type="text" class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="min_stok" class="col-4 col-form-label">Stok Minimal</label> 
                                                <div class="col-8">
                                                <div class="input-group">
                                                    <input id="min_stok" name="min_stok" type="text" class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
                                                <div class="col-8">
                                                <div class="input-group">
                                                    <textarea name="deskripsi" id="deskripsi" style="width: 100%;" class="form-control"></textarea>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="kategori_produk_id" class="col-4 col-form-label">Kategori Produk</label> 
                                                <div class="col-8">
                                                    <select id="kategori_produk_id" name="kategori_produk_id" class="custom-select">
                                                        <?php
                                                        $data = $db->query("SELECT * FROM kategori_produk");
                                                        foreach ($data as $d) {
                                                            echo "<option value='{$d['id']}'>{$d['id']}</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <div class="offset-4 col-8">
                                                    <button name="submit" type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include_once('footer.php'); ?>
</div>


