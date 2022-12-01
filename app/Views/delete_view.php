<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskon</title>
    <link rel="stylesheet" href="<?= base_url('public/css/style.css'); ?>">
</head>

<body>
    <div class="cool-form">
        <div class="container">
            <form " method=" post" action="/home/update_barang" enctype=" multipart/form-data">
                <div class="input-item">
                    <label>Nama Table </label>
                    <input type="text" placeholder="Nama Table" name="nama_table">
                </div>
                <div class="input-item">
                    <label>id </label>
                    <input type="text" placeholder="ID Barang" name="id">
                </div>

                <div class="input-item">
                    <button>Save</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
