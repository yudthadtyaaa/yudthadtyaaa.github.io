<!DOCTYPE html>
<html lang="en" class="background1">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>POST TEST 4</title>
</head>
<body>
<div class="navbar">
    <h1>PEMESANAN TIKET KONSER TULUS</h1>
</div>
    <form method="POST" action="hasil.php" class="inputForm">
        <table rules="rows" border="1" class="tabel2">
            <tr class="huruf1">
                <td>Nama :</td>
                <td><input type="text" id="nama" name="nama" placeholder="Masukkan Nama...." style="width:95%"></td>
            </tr>
            <tr class="huruf2">
                <td>Nomor KTP :</td>
                <td><input type="text" id="nama" name="no_ktp" placeholder="Masukkan Nomor KTP...." style="width:95%"></td>
            </tr>
            <tr class="huruf3">
                <td>Tanggal Lahir :</td>
                <td><input type="date"  name="tgllahir"></td>
            </tr>
            <tr class="huruf4">
                <td>Jenis Kelamin :</td>
                <td><input type="radio" id="laki-laki" name="jk" value="laki-laki">Laki-Laki
                <input type="radio" id="perempuan" name="jk" value="perempuan">Perempuan</td>
            </tr>
            <tr class="huruf5">
                <td>Jumlah Tiket :</td>
                <td><input type="number" id="jt" name="jt" min="1" style="width:20%"></td>
            </tr>
            <tr class="huruf6">
                <td>Jenis Tiket :</td>
                <td><input type="radio" id="jti" name="jti" value="BRONZE" >BRONZE
                <input type="radio" id="jti" name="jti" value="GOLD" >GOLD
                <input type="radio" id="jti" name="jti" value="PLATINUM">PLATINUM</td>
            </tr>
            <tr class="huruf7">
                <td>Riwayat Penyakit :</td>
                <td><input type="checkbox"  name="kk1" value="ada" >Ada
                <input type="checkbox"  name="kk1" value="tidak ada">Tidak Ada</td>
            </tr>
        </table>
        <br>
        <button type="submit" name="submit" value="submit" >PESAN</button>
    </form>
</body>
</html>