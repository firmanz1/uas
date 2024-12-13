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
                    <li><a href="login.html" class="tbl-biru">login</a></li>  
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
            $rating = $_POST['rating'];
            $skills = $_POST['keahlian'];
            
            // Query untuk memasukkan data
            $sql = "INSERT INTO rating (name, rating, skills) VALUES ('$name', '$rating', '$skills')";
            
            if ($conn->query($sql) === TRUE) {
                echo "<p>Rating berhasil dibuat!</p>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            $conn->close();
        }
        ?>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <h2>Masukkan Rating Anda!</h2>
            <div class="input-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="input-group">
                <label for="rating">Rating:</label>
                <select id="rating" name="rating" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <div class="input-group">
                <label for="keahlian">Keahlian:</label>
                <textarea id="keahlian" name="keahlian" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
