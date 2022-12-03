<link rel="stylesheet" href="../style/style.css?v=<?php echo time(); ?>">

<?php
    require '../database/connection.php';

    $result = mysqli_query($conn, "SELECT * FROM produk");

    $produk = [];

    while($row = mysqli_fetch_assoc($result)){
        $produk[] = $row;
    }
?>

<div id="adminCreateNavbar">
    <br><br>
    <br><br>
    <?php echo "Waktu sekarang " . date("h:i:sa"); ?>
    <br><br>
</div>

<div class="navbarTengah">
    <a href="../admin/admin.php" style="color:white;" id="kembaliAdmin">Kembali</a>
</div>

<div class="readForm">
    <table class="table">
        <thead class="thead">
            <tr>
                <th>No</th>
                <th>Nama NFT</th>
                <th>Harga NFT</th>
                <th>Stok NFT</th>
                <th>Bulan & Tahun Rilis</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; foreach($produk as $mng) : ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $mng["nama_nft"]; ?></td>
                <td><?php echo $mng["harga_nft"]; ?></td>
                <td><?php echo $mng["stok_nft"]; ?></td>
                <td><?php echo $mng['bulantahun']; ?></td>
                <td><img src="../image/<?php echo $mng['gambar'] ?>" alt="xphone1" style="max-width: 50px;height: auto;"><br></td>
                <td>
                    <a href="update.php?id=<?php echo $mng["id"]; ?>" onclick="return confirm('Yakin ingin mengubah?');" role="button" id="kembaliAdmin" name="update">UPDATE</a>
                    <a href="delete.php?id=<?php echo $mng["id"]; ?>" onclick="return confirm('Yakin ingin menghapus?');" role="button" id="kembaliAdmin">DELETE</a>
                </td>
            </tr>
            <?php $i++; endforeach; ?>
        </tbody>
    </table>
</div>
