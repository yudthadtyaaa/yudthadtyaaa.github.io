<link rel="stylesheet" href="style/style.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="fontawesome/css/all.css">
<title>LOGIN</title>

<div class="navbar">
    <div class="navbarTengah">
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
                    echo '<li><a href="logout.php">LOGOUT</a></li>';
                    else{
                        echo '<li><a href="login.php">LOGIN</a></li>';
                    }
                ?>
            </span>
        </ul>
    </div>
</div>


<div class="login">
    <form action="cek_login.php" method="POST">
        <div class="logForm">
            <h3>LOGIN</h3>
            <hr>

            <label class="user"for="username">Username</label>
            <input type="text" name="username" id="username" required>
    
            <label class="pass" for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <button type="submit" name="submit" class="logBtn">LOGIN</button>
            <div class="reg"><p>Belum punya akun? <a href="registration.php" style="color: black;">Registrasi</a></p>
            <!-- <a href="../admin/adminLogin.php" id="developer">Login as admin</a> -->
        </div>
    </div>
</form>
</div>