<?php
require "config.php";
if(isset($_GET['id'])){
  $query = mysqli_query($db,"DELETE FROM barang WHERE id=$_GET[id]");
  if($query){
    header("Location:index.php");
  } else {
    echo "Delete gagal";
  }
}
?>