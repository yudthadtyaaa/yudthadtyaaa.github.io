<?php
require 'database/connection.php';
date_default_timezone_set('Etc/GMT-8');
session_start();
if(!isset($_SESSION['username'])){
    echo "<script>alert('Silahkan login terlebih dahulu!')</script>";
    echo "<script>window.location='login.php'</script>";
}

if(isset($_POST['search'])){
    $search = trim($_POST['search']);
    $sql = "SELECT * FROM produk WHERE nama_nft LIKE '%".$search."%'";
    $tampil = mysqli_query($conn, $sql);
    $nft = [];
    while($row = mysqli_fetch_assoc($tampil)){
        $nft[] = $row;
    }
} else {
    $tampil = mysqli_query($conn,"SELECT * FROM produk");
    $nft = [];
    while($row = mysqli_fetch_assoc($tampil)){
      $nft[] =$row;
    }
}

?>

<link rel="stylesheet" href="style/style.css?v=<?php echo time(); ?>">
<title>Products NFT</title>

<div class="navbar">
    <div class="navbarKiri">
        <ul>
            <span>
                <li><a href="index.php">HOME</a></li>
            </span>
        </ul>
    </div>
    <div class="navbarKanan">
        <ul>
            <span>
                <?php
                    error_reporting(0);
                    if($_SESSION['username'])
                    echo '<li><a href="logout.php">LOGOUT</a></li>';
                    else{
                        echo '<li><a href="login.php">LOGIN</a></li>';
                    }
                ?>
            </span>
        </ul>
    </div>
</div>

<?php

?>

<div class="productsPage">
    <div class="filter">
    	<form action="" method="post">
        <input type="text" name="search" placeholder="Cari produk NFT">
        <input type="submit" value="Search">
    </form>
    </div>
    <form action="" method="post">
    <div class="catalog">
        <?php

        foreach($nft as $i):
        ?>
        <div class="catalogCard">
                <div class="nShadow">
                    <img src="image/<?php echo $i['gambar'] ?>" alt="xphone1" style="max-width: 100px;height: auto;">
                    <h3><?php echo $i['nama_nft'] ?></h3>
                    <p>Rp. <?php echo $i['harga_nft'] ?></p>
                    <div class="buy">
                    <?php
                        if($i['stok_nft'] == 0){
                            echo("Stok Habis");
                        } else{
                            ?>
                            <a href="detailProduct.php?id=<?php echo $i['id'] ?>">Buy Now</a>
                            <?php
                        }
                    ?>
                    </div>
            </div>
        </div>
        <?php
        endforeach;
        ?>
    </div>
    </form>
</div>