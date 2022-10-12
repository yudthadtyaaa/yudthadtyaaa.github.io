<!DOCTYPE html>
<html lang="en" class="background2">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>POST TEST 4</title>
</head>
<body>
<div class="navbar">
    <h1>TIKET TERSIMPAN</h1>
    <ul>
        <a href="index.php" class="pesan">Pesan Lagi?</a>
    </ul>
</div>
    <table border="1" class="tabel">
        <tr class='font1'>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $_POST['nama']; ?></td>
        </tr>
        <tr class='font2'>
            <td>Nomor KTP</td>
            <td>:</td>
            <td><?php echo $_POST['no_ktp']; ?></td>
        </tr>
        <tr class='font3'>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo $_POST['tgllahir']; ?></td>
        </tr>
        <tr class='font4'>
            <td>Jumlah Tiket</td>
            <td>:</td>
            <td><?php echo $_POST['jt']; ?></td>
        </tr>
        <tr class='font5'>
            <td>Jenis Tiket</td>
            <td>:</td>
            <td><?php echo $_POST['jti']; ?></td>
        </tr>
        <tr class='font6'>
            <td>Riwayat Penyakit</td>
            <td>:</td>
            <td><?php echo $_POST['kk1']; ?></td>
        </tr>
    </table>
</body>
</html>