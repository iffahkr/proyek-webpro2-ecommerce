<?php 
include_once('sidebar.php');
include_once('header.php'); 
include_once('database.php');

?>
<?php
$data = $db->query("SELECT * FROM pesanan WHERE id='$_GET[id]'");
$d = $data->fetch();

?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
        <h1 class="h3 mb-2 text-gray-900">Pesanan</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3" style="background-color: #efc9c9;">
                            <h6 class="m-0 font-weight-bold text-primary">Perbarui Pesanan</h6>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12 mt-4">
                                        <form method="POST" action="update_pesanan.php">
                                            <div class="form-group row">
                                                <label for="id" class="col-4 col-form-label">ID</label> 
                                                <div class="col-8">
                                                <div class="input-group">
                                                    <input id="id" name="id" type="text" class="form-control" value="<?= $d['id'] ?>"> 
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
                                                <div class="col-8">
                                                <div class="input-group">
                                                    <input id="tanggal" name="tanggal" type="text" class="form-control" value="<?= $d['tanggal'] ?>"> 
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="nama_pesanan" class="col-4 col-form-label">Nama Pesanan</label> 
                                                <div class="col-8">
                                                <div class="input-group">
                                                    <input id="nama_pesanan" name="nama_pesanan" type="text" class="form-control" value="<?= $d['nama_pesanan'] ?>">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="alamat_pesanan" class="col-4 col-form-label">Alamat Pesanan</label> 
                                                <div class="col-8">
                                                <div class="input-group">
                                                    <input id="alamat_pesanan" name="alamat_pesanan" type="text" class="form-control" value="<?= $d['alamat_pesanan'] ?>">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="no_hp" class="col-4 col-form-label">Nomor HP</label> 
                                                <div class="col-8">
                                                <div class="input-group">
                                                    <input id="no_hp" name="no_hp" type="text" class="form-control" value="<?= $d['no_hp'] ?>">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email" class="col-4 col-form-label">Email</label> 
                                                <div class="col-8">
                                                <div class="input-group">
                                                    <input id="email" name="email" type="text" class="form-control" value="<?= $d['email'] ?>">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah Pesanan</label> 
                                                <div class="col-8">
                                                <div class="input-group">
                                                    <input id="jumlah_pesanan" name="jumlah_pesanan" type="text" class="form-control" value="<?= $d['jumlah_pesanan'] ?>">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
                                                <div class="col-8">
                                                <div class="input-group">
                                                    <textarea name="deskripsi" id="deskripsi" style="width: 100%;" class="form-control"><?= $d['deskripsi'] ?></textarea>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="produk_id" class="col-4 col-form-label">ID Produk</label> 
                                                <div class="col-8">
                                                    <select id="produk_id" name="produk_id" class="custom-select">
                                                        <?php
                                                        // ambil ID dari tabel produk
                                                        $data = $db->query("SELECT * FROM produk");
                                                        foreach ($data as $d) {
                                                            echo "<option value='{$d['id']}'>{$d['id']}</option>";
                                                        }

                                                        // deklarasiin lagi biar ga bentrok sama pengambilan data yang diatas dari tabel produk
                                                        $data = $db->query("SELECT * FROM pesanan WHERE id='$_GET[id]'");
                                                        $d = $data->fetch();
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>       
                                            <div class="form-group row">
                                                <div class="offset-4 col-8">
                                                    <button name="submit" type="submit" class="btn btn-primary">Update</button>
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


