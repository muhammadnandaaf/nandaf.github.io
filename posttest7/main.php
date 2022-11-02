<?php
    require 'config.php';
    if(!empty($_SESSION["id"])){
        $id = $_SESSION["id"];
        $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id=$id");
        $row = mysqli_fetch_assoc($result);
    }else{
        header("Location: login.php");
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Web Me</title>

    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
    <!-- header -->
    <header>
        <a href="https://apollohomecare.com/blog/disease-awareness-preventive-care-tips/#:~:text=Disease%20awareness%20is%20the%20understanding,the%20ways%20to%20prevent%20it." class="logo">Diseases <span>Awareness</span></a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#diseases">Diseases</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="logout.php">LogOut</a></li>
            <li><label id="dark"></label></li>
        </ul>
    </header>
    <h5>Welcome <?php echo $row["name"]; ?></h5>
    <!-- home -->
    <section class="home" id="home">
        <div class="home-text">
            <h1>Apa itu <span class="diseases">Diseases</span> Awareness? <br></h1>
            <p>Mekanisme dimana profesional kesehatan mengajar pasien dan anggota keluarga mereka tentang penyakit mereka,<br>
                untuk berkolaborasi sebagai tim menuju tindak lanjut yang lebih baik dari pasien dan manajemen diri
                dari faktor-faktor yang dapat dimodifikasi terkait terhadap penyakitnya.</p>
        </div>
        <div><a href="read.php">Lihat Data Pengunjung</a></div>
    </section>



    <!-- container -->
    <section class="container" id="diseases">
        <div class="text">
            <h2>Penyakit yang ada pada tubuh manusia</h2>
        </div>

        <div class="row-items">

            <div class="container-head">
                <div class="head-img">
                    <img src="img/headicon.png" alt="" class="head">
                </div>
                <h4>KEPALA</h4>
                <p>Penyakit Kepala</p>
            </div>

            <div class="container-lungs">
                <div class="lungs-img">
                    <img src="img/lungsicon.png" alt="" class="lungs">
                </div>
                <h4>PARU-PARU</h4>
                <p>Penyakit Paru-paru</p>
            </div>

            <div class="container-heart">
                <div class="heart-img">
                    <img src="img/hearticon.png" alt="" class="heart">
                </div>
                <h4>JANTUNG</h4>
                <p>Penyakit Jantung</p>
            </div>

            <div class="container-kidney">
                <div class="kidney-img">
                    <img src="img/kidneyicon.png" alt="" class="kidney">
                </div>
                <h4>GINJAL</h4>
                <p>Penyakit Ginjal</p>
            </div>

        </div>
    </section>

     <!-- footer -->
    <section id="contact">
        <div class="footer">
            <div class="main">
                <div class="list">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>

                <div class="list">
                    <h4>Contact Info</h4>
                    <ul>
                        <li><a href="#">Jalan P.M Noor</a></li>
                        <li><a href="#">Perum Griya Mukti Sejahtera</a></li>
                        <li><a href="https://wa.me/083818561221">+62 838-1856-1221</a></li>
                        <li><a href="https://gmail.com">muhammadnandaaf@gmail.com</a></li>
                    </ul>
                </div>

                <div class="list">
                    <h4>Social Media</h4>
                    <div class="social">
                        <a href="https://github.com/muhammadnandaaf/nandaaf.github.io"><img src="img/githubicon.png" alt=""></a>
                        <a href="https://www.tiktok.com/@foody.fdy?_t=8WDmnXQgVTF&_r=1"><img src="img/tiktokicon.png" alt=""></a>
                        <a href="https://instagram.com/_lnanda_arjunal_?igshid=YmMyMTA2M2Y="><img src="img/igicon.png" alt=""></a>
                    </div>
                </div>


            </div>
        </div>

        <div class="end-text">
            <p>Copyrigth ©2022 All rights reserved | Made with by Muhammad Nanda</p>
        </div>
    </section>

    <!-- link to js -->
    <script type="text/javascript" src="script.js"></script>
    
</body>
</html>