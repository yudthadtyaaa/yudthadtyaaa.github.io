<?php

include '../database/connection.php';

session_start();

error_reporting(0);

$username = $_POST['username'];
$password = $_POST['password'];
if($username === 'admin' && $password === 'admin'){
    header("Location: ../admin/admin.php");
} else{
    // echo "<script>alert('Username/Password salah silahkan coba lagi!')</script>";
}

?>

<link rel="stylesheet" href="../style/style.css?v=<?php echo time(); ?>">

<title>Login Mango</title>

<div class="navbar">
    <div class="navbarTengah">
        <ul>
            <li><a href="../public/login.php">Kembali</a></li>
        </ul>
    </div>
</div>


<div class="login">
    <form action="" method="POST">
        <div class="adminForm">
            <h3>Admin Login</h3>
            <hr>

            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
    
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <button type="submit" name="submit" class="logBtn">Login</button>
        </div>
    </form>
</div>