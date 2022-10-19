<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';

if (isset($_GET['id'])) {
    if (!empty($_POST)) {

        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $nohp = isset($_POST['nohp']) ? $_POST['nohp'] : '';
        $jumlahtiket = isset($_POST['jumlahtiket']) ? $_POST['jumlahtiket'] : '';
        $jenistiket = isset($_POST['jenistiket']) ? $_POST['jenistiket'] : '';
        

        $stmt = $pdo->prepare('UPDATE konser SET id = ?, nama = ?, email = ?, nohp = ?, jumlahtiket = ?, jenistiket = ? WHERE id = ?');
        $stmt->execute([$id, $nama, $email, $nohp, $jumlahtiket, $jenistiket, $_GET['id']]);
        $msg = 'DATA BERHASIL DI UPDATE!';
    }

    $stmt = $pdo->prepare('SELECT * FROM konser WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('PESANAN TIDAK DITEMUKAN!');
    }
} else {
    exit('DATA TIDAK ADA SESUAI ID!');
}
?>



<?=template_header('Read')?>

<div class="content update">
	<h2>UBAH PESANAN ID#<?=$contact['id']?></h2>
    <form action="update.php?id=<?=$contact['id']?>" method="post">
        <label for="id">ID</label>
        <label for="nama">Nama</label>
        <input type="text" name="id" value="<?=$contact['id']?>" id="id">
        <input type="text" name="nama" value="<?=$contact['nama']?>" id="nama">
        <label for="email">Email</label>
        <label for="notelp">No. HP</label>
        <input type="text" name="email" value="<?=$contact['email']?>" id="email">
        <input type="text" name="nohp" value="<?=$contact['nohp']?>" id="nohp">
        <label for="jumlahtiket">Jumlah Tiket</label>
        <label for="jenistiket">Jenis Tiket</label>
        <input type="text" name="jumlahtiket" value="<?=$contact['jumlahtiket']?>" id="jumlahtiket">
        <input type="text" name="jenistiket" value="<?=$contact['jenistiket']?>" id="jenistiket">
        <input type="submit" value="Update">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>