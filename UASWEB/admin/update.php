<link rel="stylesheet" href="../style/style.css?v=<?php echo time(); ?>">

<?php  
require '../database/connection.php';
session_start();

if(isset($_POST['submitForm1'])){
    $id = $_GET['id'];
    $nama_nft = $_POST['nama_nft'];
    $harga_nft = $_POST['harga_nft'];
    $stok_nft = $_POST['stok_nft'];
    $bulantahun = $_POST['bulantahun'];

    $sql = "UPDATE produk SET nama_nft = '$nama_nft', harga_nft = '$harga_nft', stok_nft = '$stok_nft', bulantahun = '$bulantahun' WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo"<script>
        alert('Data berhasil diubah');
        document.location.href ='read.php';
        </script>";
    } else{
        echo"<script>
        alert('Data gagal diubah');
        document.location.href ='read.php';
        </script>";
    }
}
?>

<div class="navbarUpdate">
    <br><br>
    <?php echo "Waktu sekarang " . date("h:i:sa"); ?>
    <br><br>
    <a href="read.php" id="kembaliAdmin">Kembali</a>
</div>

<div class="adminCreate">
    <form action="" method="POST">
		<label for="">Nama NFT : </label>
        <input type="text" name="nama_nft"required><br><br>

        <label for="">Harga : </label>
        <input type="number" name="harga_nft" required><br><br>

        <label for="">Stok : </label>
        <input type="number" name="stok_nft" required><br><br>

        <label for="">Bulan tahun rilis : </label>
        <input type="month" name="bulantahun" placeholder="1999-12" required>

		<input class="logBtn" type="submit" name="submitForm1">
	</form>
</div>