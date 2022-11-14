<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Razer Indonesia/About Me</title>
    <link rel="stylesheet" href="stylesheet/katalog.css?v8">
  </head>
  <body>
    <h1 class="judul">Toko Offline Kami</h1>
    <div class="list-table center" style="overflow-x: auto;">
      <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                        <table>
                            <tr>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No HP</th>
                                <th></th>
                            </tr>
                            
                            <?php 
                                include "config.php";
                                    $query= "SELECT * FROM lokasi";
                                


                                $read = mysqli_query($db, $query);
                                while($row = mysqli_fetch_assoc($read)){
                            ?>
                            <tr>
                                <td><?php echo $row['nama'] ?></td>
                                <td><?php echo $row['alamat'] ?></td>
                                <td><?php echo $row['no'] ?></td>
                                
                            </tr>
                            <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
  </body>
</html>
