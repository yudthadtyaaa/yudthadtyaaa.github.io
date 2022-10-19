<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';

if (isset($_GET['id'])) {

    $stmt = $pdo->prepare('SELECT * FROM konser WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('ID TIDAK ADA!');
    }

    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {

            $stmt = $pdo->prepare('DELETE FROM konser WHERE id = ?');
            $stmt->execute([$_GET['id']]);
            $msg = 'DATA TELAH DIHAPUS!';
        } else {

            header('Location: read.php');
            exit;
        }
    }
} else {
    exit('ID TIDAK DITEMUKAN!');
}
?>


<?=template_header('Delete')?>

<div class="content delete">
	<h2>HAPUS PESANAN ID#<?=$contact['id']?></h2>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php else: ?>
	<p>Apa anda yakin ingin menghapus pesanan ID#<?=$contact['id']?>?</p>
    <div class="yesno">
        <a href="delete.php?id=<?=$contact['id']?>&confirm=yes">Ya</a>
        <a href="delete.php?id=<?=$contact['id']?>&confirm=no">Tidak</a>
    </div>
    <?php endif; ?>
</div>

<?=template_footer()?>