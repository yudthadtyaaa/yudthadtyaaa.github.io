<?php
include 'functions.php';

$pdo = pdo_connect_mysql();

$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

$records_per_page = 10;



$stmt = $pdo->prepare('SELECT * FROM konser ORDER BY id LIMIT :current_page, :record_per_page');
$stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();

$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);



$num_contacts = $pdo->query('SELECT COUNT(*) FROM konser')->fetchColumn();
?>


<?=template_header('Read')?>

<div class="content read">
	<h2>DATA PESANAN</h2>
	<a href="create.php" class="create-contact">TAMBAH PESANAN</a>
	<table>
        <thead>
            <tr>
                <td>#ID</td>
                <td>Nama</td>
                <td>Email</td>
                <td>No. HP</td>
                <td>Jumlah Tiket</td>
                <td>Jenis Tiket</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact): ?>
            <tr>
                <td><?=$contact['id']?></td>
                <td><?=$contact['nama']?></td>
                <td><?=$contact['email']?></td>
                <td><?=$contact['nohp']?></td>
                <td><?=$contact['jumlahtiket']?></td>
                <td><?=$contact['jenistiket']?></td>
                <td class="actions">
                    <a href="update.php?id=<?=$contact['id']?>" class="edit">UBAH PESANAN</a>
                    <a href="delete.php?id=<?=$contact['id']?>" class="trash">HAPUS PESANAN</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
	<div class="pagination">
		<?php if ($page > 1): ?>
		<a href="read.php?page=<?=$page-1?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
		<?php endif; ?>
		<?php if ($page*$records_per_page < $num_contacts): ?>
		<a href="read.php?page=<?=$page+1?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
		<?php endif; ?>
	</div>
</div>

<?=template_footer()?>