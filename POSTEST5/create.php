<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';

if (!empty($_POST)) {

    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;

    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $nohp = isset($_POST['nohp']) ? $_POST['nohp'] : '';
    $jumlahtiket = isset($_POST['jumlahtiket']) ? $_POST['jumlahtiket'] : '';
    $jenistiket = isset($_POST['jenistiket']) ? $_POST['jenistiket'] : '';


    $stmt = $pdo->prepare('INSERT INTO konser VALUES (?, ?, ?, ?, ?, ?)');
    $stmt->execute([$id, $nama, $email, $nohp, $jumlahtiket, $jenistiket]);

    $msg = 'PESANAN BERHASIL DI BUAT!';
}
?>


<?=template_header('Create')?>

<div class="content update">
	<h2>TAMBAH PESANAN</h2>
    <form action="create.php" method="post">
        <label for="id">ID</label>
        <label for="nama">NAMA</label>
        <input type="text" name="id" value="auto" id="id">
        <input type="text" name="nama" id="nama">
        <label for="email">EMAIL </label>
        <label for="notelp">No. HP</label>
        <input type="email" name="email" id="email">
        <input type="text" name="nohp" id="nohp">
        <label for="jumlahtiket">JUMLAH TIKET</label>
        <input type="number" name="jumlahtiket" id="jumlahtiket" min="1" placeholder="maks 3">
        <label for="jenis tiket">JENIS TIKET</label>
        <input type="text" name="jenistiket" id="jenistiket" placeholder="Bronze / Gold / Platinum (pilih salah satu)">
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>