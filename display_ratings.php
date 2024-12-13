<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Resmi Pembela Satwa Liar</title>
    <link rel="stylesheet" href="latihan1/style.css">
    <style>
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 12px;
        }
        th {
            background-color: #f4f4f4;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
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
                    <li><a href="latihan1.php#Tutors">Tutors</a></li>
                    <li><a href="Order.php">Order</a></li>
                    <li><a href="latihan1.php#Partners">Partners</a></li>    
                    <li><a href="latihan1.Contact">Contact</a></li>  
                    <li><a href="login.html" class="tbl-biru">login</a></li>  
                </ul>
            </div>
        </div>
    </nav>
    <section id="Tutors">
        <div class="tengah">
            <div class="kolom">
                <p class="deskripsi">Our top tutors</p>
                <h2>Tutors</h2>
                <p>Selamat datang di tab "Tutors" kami yang berfokus pada satwa! Di sini Anda akan menemukan para pengajar yang bersemangat tentang pelestarian satwa liar dan konservasi alam. Tim pengajar kami terdiri dari individu yang memiliki pengetahuan mendalam tentang kehidupan satwa, termasuk perilaku, habitat, dan tantangan yang dihadapi oleh spesies-spesies yang terancam.</p>
            </div>
            <div class="container">
                <h2>Daftar Rating</h2>
                <?php
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

                // Ambil data dari tabel rating
                $sql = "SELECT id, name, rating, skills FROM rating";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<table>";
                    echo "<tr><th>ID</th><th>Nama</th><th>Rating</th><th>Keahlian</th><th>Actions</th></tr>";
                    // Output data dari setiap baris
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["rating"] . "</td>";
                        echo "<td>" . $row["skills"] . "</td>";
                        // Tambahkan tautan untuk edit dan hapus dengan parameter ID
                        echo "<td><a href='edit.php?id=" . $row["id"] . "'>Edit</a> | <a href='delete.php?id=" . $row["id"] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a></td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<p>Tidak ada hasil</p>";
                }

                $conn->close();
                ?>
            </div>
        </div>
    </section>
</body>
</html>
