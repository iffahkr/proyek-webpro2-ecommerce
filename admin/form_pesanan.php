<?php 
include_once('sidebar.php');
include_once('header.php'); 
include_once 'database.php';

?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
        <h1 class="h3 mb-2 text-gray-900">Pesanan</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3" style="background-color: #efc9c9;">
                            <h6 class="m-0 font-weight-bold text-primary">Masukkan Pesanan</h6>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12 mt-4">
                                        <form method="POST" action="proses_pesanan.php">
                                            <div class="form-group row">
                                                <label for="id" class="col-4 col-form-label">ID</label> 
                                                <div class="col-8">
                                                <div class="input-group">
                                                    <input id="id" name="id" type="text" class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
                                                <div class="col-8">
                                                <div class="input-group">
                                                    <input id="tanggal" name="tanggal" type="date" class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="nama_pesanan" class="col-4 col-form-label">Nama Pesanan</label> 
                                                <div class="col-8">
                                                <div class="input-group">
                                                    <input id="nama_pesanan" name="nama_pesanan" type="text" class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="alamat_pesanan" class="col-4 col-form-label">Alamat Pesanan</label> 
                                                <div class="col-8">
                                                <div class="input-group">
                                                    <input id="alamat_pesanan" name="alamat_pesanan" type="text" class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="no_hp" class="col-4 col-form-label">Nomor HP</label> 
                                                <div class="col-8">
                                                <div class="input-group">
                                                    <input type="number" id="no_hp" name="no_hp" class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email" class="col-4 col-form-label">Email</label> 
                                                <div class="col-8">
                                                <div class="input-group">
                                                    <input id="email" name="email" type="text" class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah Pesanan</label> 
                                                <div class="col-8">
                                                <div class="input-group">
                                                    <input id="jumlah_pesanan" name="jumlah_pesanan" type="number" class="form-control">
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
                                                <label for="produk_id" class="col-4 col-form-label">ID Produk</label> 
                                                <div class="col-8">
                                                    <select id="produk_id" name="produk_id" class="custom-select">
                                                        <?php
                                                        $data = $db->query("SELECT * FROM produk");
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
</div>
<?php include_once('footer.php'); ?>

