<?php
// Pastikan ada parameter ID yang dikirimkan
if (isset($_GET['id']) && !empty($_GET['id'])) {
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

    // Ambil ID dari parameter GET
    $id = $_GET['id'];

    // Query untuk mengambil data berdasarkan ID
    $sql = "SELECT id, name, rating, skills FROM rating WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Ambil data dari hasil query
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $rating = $row['rating'];
        $skills = $row['skills'];

        // Form untuk edit data
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Edit Data</title>
            <link rel='stylesheet' href='latihan 1/style.css'>
            <style>
                .container {
                    width: 80%;
                    margin: auto;
                    overflow: hidden;
                }
                form {
                    margin-top: 20px;
                }
                form input, form textarea, form select {
                    width: 100%;
                    padding: 10px;
                    margin-bottom: 10px;
                    font-size: 16px;
                    border: 1px solid #ddd;
                    border-radius: 5px;
                }
                form input[type='submit'] {
                    background-color: #4CAF50;
                    color: white;
                    border: none;
                    cursor: pointer;
                }
            </style>
        </head>
        <body>
            <header>
                <div class='container'>
                </div>
            </header>
            <nav>
                <div class='wrapper'>
                    <div class='logo'><a href=''>welcome</a></div>
                    <div class='menu'>
                        <ul>
                            <li><a href='latihan1.php'>Home</a></li>
                            <li><a href='latihan1.php#Profile'>Profile</a></li>
                            <li><a href='latihan1.php#Tutors'>Tutors</a></li>
                            <li><a href='Order.php'>Order</a></li>
                            <li><a href='latihan1.php#Partners'>Partners</a></li>    
                            <li><a href='latihan1.Contact'>Contact</a></li>  
                            <li><a href='login.html' class='tbl-biru'>login</a></li>  
                        </ul>
                    </div>
                </div>
            </nav>
            <section id='Tutors'>
                <div class='tengah'>
                    <div class='kolom'>
                        <h2>Edit Data</h2>
                        <form method='POST' action='update.php'>
                            <input type='hidden' name='id' value='$id'>
                            <label for='name'>Nama:</label><br>
                            <input type='text' id='name' name='name' value='$name'><br>
                            <label for='rating'>Rating:</label><br>
                            <input type='text' id='rating' name='rating' value='$rating'><br>
                            <label for='skills'>Keahlian:</label><br>
                            <textarea id='skills' name='skills'>$skills</textarea><br>
                            <input type='submit' value='Simpan Perubahan'>
                        </form>
                    </div>
                </div>
            </section>
        </body>
        </html>
        ";
    } else {
        echo "Data tidak ditemukan.";
    }

    $conn->close();
} else {
    echo "ID tidak valid.";
}
?>
