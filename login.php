<?php
session_start(); // Start session

// Informasi koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uas_firman";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek login
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // Login berhasil, set session
        $_SESSION['username'] = $username;
        
        // Redirect ke halaman home (latihan1.php)
        header("Location: latihan1.php");
        exit();
    } else {
        // Login gagal
        echo "<p>Username atau password salah!</p>";
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Resmi Pembela Satwa Liar</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <header>
        <div class="container">
            <img src="JungleJive.png" alt="Rumah Satwa" class="header-image">
        </div>
    </header>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>welcome</a></div>
            <div class="menu">
                <ul>
                    <li><a href="latihan1.php">Home</a></li>
                    <li><a href="latihan1/latihan1.html">Profile</a></li>
                    <li><a href="latihan1/latihan1.html">Tutors</a></li>
                    <li><a href="Order.html">Order</a></li>
                    <li><a href="latihan1/latihan1.html">Partners</a></li>    
                    <li><a href="latihan1/latihan1.html">Contact</a></li>  
                    <li><a href="logout.php" class="tbl-biru">Logout</a></li>  
                </ul>
            </div>
        </div>
    </nav>
    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="login-form">
                <div class="input-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
