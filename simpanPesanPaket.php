<?php

require "conn.php";

$nama = $_POST['namaForm'] ?? "";
$alamat = $_POST['alamatForm'] ?? "" ;
$tujuan = $_POST['tujuanForm'] ?? "";
$gender = $_POST['genderForm'] ?? "";
$paket = $_POST['paketForm'] ?? "";
$sarapan = $_POST['sarapanForm'] ?? "";
$kendaraan = $_POST['kendaraanForm'] ?? "";
$penginapan = $_POST['penginapanForm'] ?? "";
$tanggal = $_POST['tanggalForm'] ?? "";
$email = $_POST['emailForm'] ?? "";
$kontak = $_POST['kontakForm'] ?? "";

$data = "('$nama', '$alamat', '$tujuan', '$gender', '$paket','$sarapan', '$kendaraan','$penginapan',
            '$tanggal', '$email', '$kontak',
)";

if(isset($_POST)){

    $hasil = mysqli_query($db, "INSERT INTO pariwisata (nama, alamat, tujuan, gender, paket, sarapan, kendaraan, penginapan, tanggal, email, kontak) VALUES  
                ('$nama', '$alamat', '$tujuan', '$gender', '$paket','$sarapan', '$kendaraan','$penginapan',
                '$tanggal', '$email', '$kontak')");
    
    if($hasil){
        echo "<script>
            alert('data berhasil disimpan');
        </script>";
    }
    else{
        echo "<script>
        alert('data gagal disimpan');
    </script>";
    }
}

?>