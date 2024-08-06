<?php

$page = $_GET['page'] ?? "";

function rupiah($angka){
    $hasil = 'Rp. ' . number_format($angka, 2, "," , ".");
    return $hasil;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Pariwisata</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/DataTables/datatables.min.css">
</head>
<body>
    <div class="container-fluid">
        <!-- Header -->
        <div class="alert alert-danger" role="alert">
            Selamat datang di website Pariwisata...
        </div>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light  ">
            <a class="navbar-brand">Pariwisata</a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="?page=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="?page=pesanpaket" >Pesan Paket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="?page=tabelpesanan" >Lihat Pesanan</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- content -->
        <div class="row p-3">
            <div class="col-8">

            <?php
                if($page == "pesanpaket"){
                    require "pesanPaket.php";
                }else if($page == "tabelpesanan"){
                    require "tabelPesanan.php";
                }
                
                
                else{

            ?>
                    <div class="row">
                        <div class="col-6">
                            <img src="RobloxScreenShot20240421_232201560.png" alt="" width="100%">
                        </div>
                        <div class="col-6">
                            <img src="RobloxScreenShot20240421_232201560.png" alt="" width="100%">                   
                        </div>
                    </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem earum dolores aspernatur ducimus aperiam quibusdam magni sunt voluptatum, 
                            et soluta quia recusandae autem fugiat totam impedit vero in consequatur ea.  </p>
                
            <?php
                }
            ?>
            </div>
            <div class="col-4">
                <iframe src="./assets/Desktop 2023.12.22 - 07.52.34.01.mp4" frameborder="0" width="100%"></iframe>
            </div>
        </div>

        <div class="alert alert-info d-flex justify-content-center" role="alert">
            Content
        </div>
    </div>

    <script src="./assets/DataTables/datatables.min.js"></script>
    <script>
        new DataTable('#myTable', {
    layout: {
        topStart: {
            buttons: [
                {
                    extend : 'copy',
                    className : 'btn btn-primary'

                }, 
                {
                    extend: 'excel',
                    className : 'btn btn-primary'

                },
                {
                    extend : 'pdfHtml5',
                    orientation : 'landscape',
                    className : 'btn btn-primary'
                }
            ]
        }
    }
});
    </script>
</body>
</html>