<div class="row">
    <!-- Start Form -->
    <form action="simpanPesanPaket.php" method="post">
    
    <!-- input nama -->
    <div class="form-group">
        <label for="inputNama">Nama</label>
        <input id="inputNama" class="formc-ontrol" type="text" name="namaForm">
    </div>
    <!-- end input nama -->

    <!-- input alamat -->
    <div class="form-group">
        <label for="inputAlamat">Alamat</label>
        <textarea id="inputAlamat" class="form-control" name="alamatForm" rows="3"></textarea>
    </div>
    <!-- end input alamat -->

    <!-- input tujuan -->
    <div class="form-group">
        <label for="inputTujuan">Tujuan Pariwisata</label>
        <select name="tujuanForm" id="inputTujuan">
            <option>Bali</option>
            <option>Lampung</option>
            <option>Bangka</option>
        </select>
    </div>
    <!-- end input tujuan -->

    <!-- input gender -->
    <div class="form-check">
        <label class="form-check-label mr-4">
        <input type="radio" class="form-check-input" name="genderForm" id="" value="pria" >
        Pria
      </label>
        <label class="form-check-label">
        <input type="radio" class="form-check-input" name="genderForm" id="" value="wanita" >
        wanita
      </label>
    </div>
    <!-- end input gender -->

    <!-- input jumlah -->
    <div class="form-group">
        <label for="inputJumlah">Jumlah Paket</label>
        <input id="inputJumlah" class="form-control" type="number" name="paketForm">
    </div>
    <!-- end input jumlah -->

    <!-- input akomodasi -->
    <div class="form-check">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="sarapanForm" id="" value="1" >
        Akomodasi tambahan Sarapan
    </div>
      </label>
      <div class="form-check">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="kendaraanForm" id="" value="1" >
        Akomodasi tambahan kendaraan
      </label>
      </div>
      <div class="form-check">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="penginapanForm" id="" value="1" >
        Akomodasi tambahan penginapan
      </label>
    </div>
    <!-- end input akomodasi -->

    <!-- input tanggal berangkat -->
    <div class="form-group">
        <label for="inputTanggal">Tanggal Berangkat</label>
        <input id="inputTanggal" class="form-control" type="date" name="tanggalForm">
    </div>
    <!-- end input tanggal berangkat -->

    <!-- input email -->
    <div class="form-group">
        <label for="inputEmail">Email</label>
        <input id="inputEmail" class="form-control" type="email" name="emailForm">
    </div>
    <!-- end input email -->

    <!-- input no hp -->
    <div class="form-group">
        <label for="inputNo">Kontak</label>
        <input id="inputNo" class="form-control" type="number" name="kontakForm">
    </div>
    <!-- end input no hp -->

    <!-- tombol kirim -->
    <button type="submit" class="btn btn-outline-success">Kirim</button>
    <!-- end tombol kirim -->
    

    </form>
</div>