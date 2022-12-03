<link rel="stylesheet" href="style/style.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="fontawesome/css/all.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>NFT MONKEY'S STORE</title>

<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<script>alert('Username/Password anda salah!')</script>";
		}
	}
?>

<div class="navbar">
    <div class="navbarKiri">
        <ul>
            <span>
                <li><a href="index.php"><i class="fa-solid fa-house fa-lg"></i></a></li>
                <li><a href="products.php">NFT</a></li>
            </span>
        </ul>
    </div>
    <div class="navbarKanan">
        <ul>
            <span>
                <?php
                    session_start();
                    error_reporting(0);
                    if($_SESSION['username'])
                    echo '<li><a href="logout.php"><i class="fa-solid fa-right-from-bracket fa-lg"></i></a></li>';
                    else{
                        echo '<li><a href="login.php"><i class="fa-solid fa-right-to-bracket fa-lg"></i></a></li>';
                    }
                ?>
            </span>
        </ul>
    </div>
</div>

<div class="landingPage">
    <div class="welcome">
        <div class="welcome1">
        <H1>MOST EXPENSIVE MONKEY'S!!!</H1>
            <img src="image/logo.jpg" alt="logo" width="250px">
            <h3>MONKEY ANIV 1st</h3>
            <img src="image/logo2.jpg" alt="logo" width="250px">
            <h3>MONKEY ANIV 2nd</h3>
            <img src="image/logo3.jpg" alt="logo" width="250px">
            <h3>MONKEY ANIV 3rd</h3>
            <br><br>
            <div class="buy">
                <a href="products.php">Buy now</a>
            </div>
        </div>
        <div class="nft">
            <H1>MOST WANTED MONKEY'S!!!</H1>
            <img src="image/NFT1.jpg" alt="xphone1pro" id="imageIndex" >
            <img src="image/NFT2.jpg" alt="xphone1pro" id="imageIndex" >
            <img src="image/NFT3.jpg" alt="xphone1pro" id="imageIndex" >
        </div>           
    </div>
    <a href="../public/aboutme.php">
    <!-- <div class="aboutContainer">
        <img src="image/banner.png" alt="aboutmeBanner" width="100%">
    </div> -->
    </a>
</div>



<div class="footer" >
    <div class="info">
        <div class="infoKiri" >
            <p>NFT MONKEY's Store adalah Official Store NFT terpercaya di Indonesia yang sudah menjual banyak NFT<br> khususnya NFT MONKEY dan berbagai macam NFT lainnya.</p>
            <p>Email : nftmonkey@gmail.com</p>
        </div>
        <div class="infoKanan">
            <p>Kami menerima pembayaran : </p>
            <ul>
                <p>GOPAY</p>
                <p>OVO</p>
                <p>VISA</p>
                <p>MASTER CARD</p>
            </ul>
        </div>
    </div>
    <div class="copyright">
        <p>COPYRIGHT 2022  ALL RIGHTS RESERVED.</p>
    </div>
</div>
