<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Barang</title>
    <link rel="stylesheet" href="<?= base_url('public/css/style.css'); ?>">
</head>
<div class="cool-form">
    <div class="container">
        <form method="post" action="/home/update_barang" enctype=" multipart/form-data">
            <div class="input-item">
                <label>Nama Tabel </label>
                <input type="text" placeholder="Nama Tabel" name="nama_table">
            </div>
            <div class="input-item">
                <label>ID Barang </label>
                <input type="text" placeholder="ID Barang" name="id">
            </div>

            <div class="input-item">
                <label>Nama Barang </label>
                <input type="text" placeholder="Nama Barang" name="nama_barang">
            </div>

            <div class="input-item">
                <label>Jumlah </label>
                <input type="text" placeholder="Jumlah " name="jumlah">
            </div>

            <div class="input-item">
                <label>Harga </label>
                <input type="text" placeholder="Harga" name="harga">
            </div>
            <div class="input-item">
                <button>Save</button>
            </div>
        </form>
    </div>
</div>

</html>
