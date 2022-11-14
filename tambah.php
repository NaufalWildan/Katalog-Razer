<?php
  require "config.php";

  if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $warna = $_POST['warna'];
    $harga = $_POST['harga'];
    $tanggal = date('Y:m:d');
    
    $format_file = $_FILES['foto']['name'];
    $tmp_name = $_FILES['foto']['tmp_name'];
    $size = $_FILES['foto']['size'];
    $tipe = explode('.',$format_file);
    $tipe2 = $tipe[1];

    $rename = time() . '.' . $tipe2;
    $format_yang_diizinkan = array('jpg','png','jpeg');
    $max_size = 1000000;

    
    if(in_array($tipe2, $format_yang_diizinkan) === true){
      if($size < $max_size){
          move_uploaded_file($tmp_name, './gambar/' . $rename);
          $query = mysqli_query($db,"INSERT INTO barang (nama,kategori,warna,harga,gambar,waktu) VALUES ('$nama','$kategori','$warna','$harga','$rename','$tanggal')");
          if($query){
            echo '<script language = "javascript">
            alert("Data Berhasil Di Input") ;document.location = "index.php";</script>';    
        }
        else{
            echo '<script language = "javascript">
            alert("Data Gagal Di Input") </script>';    
        }
      }
    }
    
  }
  
?> 