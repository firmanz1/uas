<?php
session_start(); // Start session

// Periksa apakah pengguna belum login, jika ya, arahkan kembali ke halaman login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Sambungkan ke database atau lakukan operasi lain yang diperlukan
// Pastikan Anda melakukan koneksi atau operasi lainnya di sini jika dibutuhkan
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Resmi Pembela Satwa Liar</title>
    <link rel="stylesheet" href="style.css">
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
                    <li><a href="#Profile">Profile</a></li>
                    <li><a href="display_ratings.php">Rating</a></li>    
                    <li><a href="rating.php">Masukkan Rating</a></li>  
                    <li><a href="Order.php">Order</a></li>
                    <li><a href="#Partners">Partners</a></li>    
                    <li><a href="#Contact">Contact</a></li>  
                    <li><a href="logout.php" class="tbl-biru">Logout</a></li>  
                </ul>
            </div>  
        </div>
    </nav>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="Home"> 
            <img src="https://img.freepik.com/free-vector/cute-wild-animals-group_1308-146182.jpg?t=st=1711877153~exp=1711880753~hmac=1bbd72568d4d40b7dbe3ae6e7001ba87f37efe24eb1690848d4547f5f621527f&w=740"/>
            <div class="kolom">
                <p class="deskripsi">Mengulik lebih dalam Tentang Satwa #dirumahaja </p>
                <h2>Tak Kenal Maka,Tak Sayang</h2>
                <p>Kita berbagi planet ini dengan makhluk luar biasa bernama satwa. Mereka tak hanya menjadi penyeimbang alam dan sumber daya penting, tapi juga bisa menjadi teman setia. Namun, kelestarian mereka terancam. Mari wujudkan cinta kita pada satwa dengan tindakan nyata. Dukung konservasi, kurangi konsumsi, dan sebarkan kesadaran. Bersama, kita bisa menjaga warisan alam berharga ini untuk generasi mendatang.</p>
                <p><a href="" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
            </div>
        </section>
        <!-- untuk profile -->
        <section id="Profile">
            <div class="kolom">
                <p class="deskripsi">You Will Need Thnis</p>
                <h2>Profile</h2>
                <p> Selamat datang di profil kami! Kami adalah komunitas pecinta satwa yang berkomitmen untuk melindungi dan merayakan kehidupan satwa di seluruh dunia. Dalam profil ini, Anda akan menemukan informasi tentang nilai-nilai kami, misi kami, dan visi kami dalam melindungi satwa liar. Tim kami terdiri dari individu yang penuh semangat dan berdedikasi untuk menyelamatkan satwa-satwa yang membutuhkan perlindungan.</p>
                <p> Terima kasih atas kunjungan Anda ke profil kami. Mari bersama-sama menjadi suara bagi satwa liar yang tidak memiliki suara, dan berjuang untuk masa depan yang lebih baik bagi planet ini dan semua makhluk yang tinggal di dalamnya.</p>
                <p><a href="" class="tbl-biru">Pelajari Selengkapnya</a></p>
            </div>
            <img src="https://img.freepik.com/free-vector/cute-animals-white_1308-35096.jpg?t=st=1711875934~exp=1711879534~hmac=50018b285f549f7ecaed89b48fb0cf0011b4fcf1c749e6825e2e11465a06ecaa&w=740"/>
        </section>
        <!--untuk partners-->
        <section id="Partners">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Our Top partners</p>
                    <h2>Partners</h2>
                    <p>"Kami bangga bermitra dengan organisasi dan perusahaan terkemuka yang berbagi visi kami dalam menciptakan perubahan positif."</p>
                </div>
                <div class="partner-list">
                    <div class="kartu-partner">
                        <img src="https://th.bing.com/th?id=OIP.FpBTdmS425XMYJ6kJH-fVAHaHd&w=249&h=250&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://th.bing.com/th?id=OIP.gyOr2gA003RNeYf477izsQHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://th.bing.com/th?id=OIP.-XZxkbfxeLbUcYPH8AZ81QHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://th.bing.com/th?id=OIP.7VCvDhZdeUbq3fdrEAquNwHaHn&w=246&h=253&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://th.bing.com/th?id=OIP.5KR3eLT5UEkcRwDcJ5ma6AHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"/>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div id="Contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>Jungle Jive.</h3>
                    <p>Selamat datang di dunia yang penuh keajaiban, dimana kita akan menjelajahi kehidupan Hewan bersama kami tentunya hanya di Jungle Jive</p>
                </div>
                <div class="footer-section">
                    <h3>About.</h3>
                    <p>Selamat datang di [JungleJive]!

                        Kami adalah komunitas pecinta satwa yang berkomitmen untuk melindungi dan mempromosikan kesejahteraan satwa di seluruh dunia. Dengan informasi terkini, artikel inspiratif, dan sumber daya berguna, kami berbagi pengetahuan tentang satwa untuk menginspirasi perubahan positif.</p>
                </div>
                <div class="footer-section">
                    <h3>Contact.</h3>
                    <p>medan Indonesia</p>
                    <p>Kode pos: 22222</p>
                </div>
                <div class="footer-section">
                    <h3>Social.</h3>
                    <p><b>Youtube:</b>Rumah Satwa Liar</p>
                    <p><b>Instagram:</b>firmansyah_z1</p>
                    <p><b>Whatshaap:</b>0831-xxxx-xxxx</p>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2024. <b>Firmansyah Sitepu.</b> All Rights Reserved.
        </div>
    </div>
</body>
</html>
