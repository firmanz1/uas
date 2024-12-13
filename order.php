<?php
session_start();
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
        </div>
    </header>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>welcome</a></div>
            <div class="menu">
                <ul>
                    <li><a href="latihan1.php">Home</a></li>
                    <li><a href="latihan1.php#Profile">Profile</a></li>
                    <li><a href="display_ratings.php">Rating</a></li>    
                    <li><a href="Order.php">Order</a></li>
                    <li><a href="latihan1.php#Partners">Partners</a></li>    
                    <li><a href="latihan1.php#Contact">Contact</a></li>  
                    <li><a href="logout.php" class="tbl-biru">Logout</a></li>  
                      <!-- Tambahkan link Logout -->
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="form-container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
            
            // Ambil data dari form
            $name = $_POST['nama'];
            $phone_number = $_POST['nomor_hp'];
            $purpose = $_POST['keperluan'];
            $order_duration = $_POST['jam_order'];
            
            // Query untuk memasukkan data
            $sql = "INSERT INTO orders (name, phone_number, purpose, order_duration) VALUES ('$name', '$phone_number', '$purpose', '$order_duration')";
            
            if ($conn->query($sql) === TRUE) {
                echo "<p>Order berhasil dibuat!</p>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            $conn->close();
        }
        ?>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <h2>Masukan Data Anda</h2>
            <div class="input-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="input-group">
                <label for="nomor_hp">Nomor HP:</label>
                <input type="text" id="nomor_hp" name="nomor_hp" required>
            </div>
            <div class="input-group">
                <label for="keperluan">Keperluan Order:</label>
                <textarea id="keperluan" name="keperluan" required></textarea>
            </div>
            <div class="input-group">
                <label for="jam_order">Jam Order:</label>
                <select id="jam_order" name="jam_order" required>
                    <option value="1">1 Jam</option>
                    <option value="2">2 Jam</option>
                    <option value="3">3 Jam</option>
                </select>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
