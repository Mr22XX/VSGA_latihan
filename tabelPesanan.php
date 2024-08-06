<div class="table-responsive">
    <table class="table table-dark table-striped table-bordered" id="myTable">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tujuan / Jumlah Paket</th>
                <th>Gender</th>
                <th>Harga Paket</th>
                <th>Sarapan</th>
                <th>Kendaraan</th>
                <th>Penginapan</th>
                <th>Tanggal Pesanan</th>
                <th>Email/HP</th>
                <th>Harga Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require "conn.php";

                $sql = mysqli_query($db, "SELECT * FROM pariwisata");

                while($data = mysqli_fetch_array($sql)){
                    if($data['tujuan'] == "Bali"){
                        $harga = 500000;
                    }
                    else if($data['tujuan'] == "Lampung"){
                        $harga = 400000;

                    }

                    if($data['sarapan'] == 1){
                        $hargaSarapan = 50000;
                    }
                    else{
                        $hargaSarapan = 0;
                    }

                    if($data['kendaraan'] == 1){
                        $hargaKendaraan = 200000;
                    }
                    else{
                        $hargaKendaraan = 0;
                    }

                    if($data['penginapan'] == 1){
                        $hargaPenginapan = 300000;
                    }
                    else{
                        $hargaPenginapan = 0;
                    }
                
            ?>
            <tr>
                <td><?= $data['nama']?></td>
                <td><?= $data['alamat']?></td>
                <td><?= $data['tujuan'] ." / ". $data['paket']?></td>
                <td><?= $data['gender']?></td>
                <td><?=rupiah($harga)?></td>
                <td><?=rupiah($hargaSarapan)?></td>
                <td><?=rupiah($hargaKendaraan)?></td>
                <td><?=rupiah($hargaPenginapan)?></td>
                <td><?= $data['tanggal']?></td>
                <td><?= $data['email'] . " / " . $data['kontak']?></td>
                <td><?= rupiah(($harga + $hargaSarapan + $hargaKendaraan + $hargaPenginapan) * $data['paket'])?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>