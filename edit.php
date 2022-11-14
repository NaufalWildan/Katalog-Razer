<?php
require "config.php";
if(isset($_GET['id'])){
    $query = mysqli_query($db,"SELECT * FROM barang WHERE id=$_GET[id]");
    $result = mysqli_fetch_assoc($query);
    $nama = $result['nama'];
    $kategori = $result['kategori'];
    $warna = $result['warna'];
    $harga = $result['harga'];
}

if(isset($_POST['submit'])){
    $query = mysqli_query($db,"UPDATE barang SET nama='$_POST[nama]',kategori='$_POST[kategori]',warna='$_POST[warna]',harga='$_POST[harga]' WHERE id=$_GET[id]");
    if($query){
        header("Location:index.php");
    } else {
        echo "Update gagal";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Razer Indonesia</title>
    <link rel="stylesheet" href="style.css?3">
</head>
<body>
        <h1 class="judul">Daftar Barang</h1>
    
    <div class="form-class">
        <h3>Edit Data barang</h3>
        <form action="" method="post">
            <label for="">Nama Lengkap</label><br>
            <input type="text" name="nama" class="form-text" value='<?=$nama?>'><br>
            
            <label for="">kategori</label><br>
            <input type="text" name="kategori" class="form-text" value='<?=$kategori?>'><br>
            
            <label for="">warna</label><br>
            <input type="warna" name="warna" class="form-text" value='<?=$warna?>'><br>
            
            <label for="">Harga</label><br>
            <input type="text" name="harga" class="form-text" value='<?=$harga?>'><br>

            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        </form>
    </div>

</body>
</html>