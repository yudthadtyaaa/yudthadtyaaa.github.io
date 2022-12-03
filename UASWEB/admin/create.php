<link rel="stylesheet" href="../style/style.css?v=<?php echo time(); ?>">

<?php
    date_default_timezone_set('Etc/GMT-8');
    require '../admin/functions.php';
    $pdo = pdo_connect_mysql();
    $msg = '';

    if (!empty($_POST)) {

        $id_nft = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;

        $nama_nft = isset($_POST['nama_nft']) ? $_POST['nama_nft'] : '';
        $harga_nft = isset($_POST['harga_nft']) ? $_POST['harga_nft'] : '';
        $stok_nft = isset($_POST['stok_nft']) ? $_POST['stok_nft'] : '';
        $bulantahun = isset($_POST['bulantahun']) ? $_POST['bulantahun'] : '';
        $gambar = isset($_POST['gambar']) ? $_POST['gambar'] : '';
    
        $stmt = $pdo->prepare('INSERT INTO produk VALUES (?, ?, ?, ?, ?, ?)');
        $stmt->execute([$id_nft, $nama_nft, $harga_nft, $stok_nft, $bulantahun, $gambar]);
        echo "<script>alert('Data berhasil di tambahkan!')</script>";
    } else{
        // echo "<script>alert('Data gagal di tambahkan!')</script>";
    }
?>

<div id="adminCreateNavbar">
    <br><br>
    <?php echo "Waktu sekarang " . date("h:i:sa"); ?>
    <br><br>
</div>

<div class="kembaliAdmin">
    <a href="../admin/admin.php" style="color:white;" id="kembaliAdmin">Kembali</a>
</div>
<div class="adminCreate">
    <form action="" method="POST">
                <label for="">Nama NFT</label>
				<input type="text" name="nama_nft" required>
                <label for="">Harga NFT</label>
				<input type="number" name="harga_nft" required>
                <label for="">Stok</label>
				<input type="number" name="stok_nft" required>
                <label for="">Bulan dan tahun rilis</label>
                <input type="month" name="bulantahun" required>
                <label for="">Gambar</label>
                <input type="file" name="gambar" required>
		</table>
		<input class="logBtn" type="submit" name="submitForm">
	</form>
</div>