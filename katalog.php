<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Razer Indonesia</title>
    <link rel="stylesheet" href="stylesheet/katalog.css?v8">
    
</head>
<body>
    

    

    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="home.php" class="logo">
                            <img src="logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="home.php" class="active">Home</a></li>
                            <li><a href="saran.php">Saran</a></li>
                            <li><a href="katalog.php">Katalog</a></li>
                            <li><a href="index.html">Logout</a></li>
                            <li><input class="toggle" type="checkbox" onclick="myFunctionn()"/></li>
                        </ul>        
                        
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>  
    </header>
   
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                        <table>
                            <tr>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <th></th>
                            </tr>
                            
                            <?php 
                                include "config.php";
                                    $query= "SELECT * FROM barang";
                                


                                $read = mysqli_query($db, $query);
                                while($row = mysqli_fetch_assoc($read)){
                            ?>
                            <tr>
                                <td><?php echo $row['nama'] ?></td>
                                <td><?php echo $row['harga'] ?></td>
                                <td><img src="gambar/<?php echo $row['gambar']?>" alt=""></td>
                                
                            </tr>
                            <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <!-- ***** Main Banner Area End ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2022 Razer Inc. All rights reserved. 
                            <ul >
                                <li><a href="aboutme.php" class="active">About Us</a></li>
                                <li><a href="aboutme.php">Site Map</a></li>
                                <li><a href="aboutme.php">Contact Us</a></li>
                            </ul>
                        
                    </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>
