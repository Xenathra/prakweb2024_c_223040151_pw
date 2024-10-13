<?php 
require 'functions.php';
$dataBuku = query("SELECT * FROM buku");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>koleksiBuku</title>

    <link rel="stylesheet" href="style.cs">

    <!-- bootstrap-start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <!-- bootstrap-end -->
    
    <style>
        th, tr{
            color: #dcaf4b;
        }

        body{
            background-color: #242425;
        }

        nav{
            background-color: #09090a;
        }

        nav, a{
            color: white;
        }

        .title, a, h5, h6, p{
            color: #dcaf4b !important;
        }
    </style>
</head>
<body>
    <!-- navbar-start -->
    <nav class="navbar navbar-expand-lg sticky-top">
            <div class="container">
            <a class="navbar-brand" href="index.php">Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown link
                    </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                </ul>
            </div>
            </div>
        </nav>
    <!-- navbar-end -->

    <!-- headingGede-start -->
    <div class="title p-5">
        <h1>KOLEKSI BUKU</h1>
        <hr>
    </div>
        <!-- headingGede-end -->

    <!-- tampil koleksi buku dan harga dengan memunculkan data dari phpmyadmin-->
    <!-- table tampil buku -->
    <div class="tableWrapper m-5">  
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">JudulBuku</th>
                    <th scope="col">Harga</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach( $dataBuku as $db): ?>
                <tr>
                    <th><?= $db['id'] ;?></th>
                    <td><?= $db['judulBuku'] ;?></td>
                    <td><?= $db['hargaBuku'] ;?></td>
                </tr>
                <!-- gatau errornya dimana -->
                <?php endforeach; ?>    
                <!-- gatau errornya dimana -->
            
                
            </tbody>
        </table>
    </div>
    


</body>
</html>