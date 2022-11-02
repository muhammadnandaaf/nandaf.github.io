<?php 

    require 'koneksi.php';
    if(isset($_POST['kirim'])){
        $nama = $_POST['nama_pengunjung'];
        $tgl = $_POST['tanggal_kunjungan'];
        $instansi = $_POST['instansi'];
        $telepon = $_POST['telepon'];
        $gambar = $_POST['gambar'];

        $result = mysqli_query($db, "INSERT INTO kotak (nama_pengunjung,tanggal_kunjungan,instansi,telepon,gambar)
        VALUES ('$nama','$tgl','$instansi','$telepon','$gambar')");

        if (isset($_POST['submit']) && isset($_FILES['gambar'])){
            $img_name = $_FILES['gambar']['name'];
            $img_size = $_FILES['gambar']['size'];
            $tmp_name = $_FILES['gambar']['tmp_name'];
            $error = $_FILES['gambar']['error'];

            if($error === 0){
                if($img_size > 125000){
                    $em = "Too Large";
                    header("Location : read.php?error=$em");
                }else{
                    echo "Not More than 1mb";
                }
            }else{
                $em = "ERROR";
                header("Location: read.php?error=$em");
            }
        }

        if($result){
            echo "
            <script>
                alert('Data Berhasil Dikirim')
                document.location.href='read.php';
            </script>;
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengunjung</title>
</head>
<body>
    <h3>Pendataan Pengunjung</h3>
    <form action="" method="post">
        <label for="">Nama Lengkap : </label><br>
        <input type="text" name="nama_pengunjung"><br><br>

        <label for="">Tanggal Berkunjung : </label><br>   
        <input type="text" name="tanggal_kunjungan"> <br><br>

        <label for="">Instansi : </label><br>
        <input type="text" name="instansi"> <br><br>

        <label for="">No Telpon : </label> <br>
        <input type="text" name="telepon" id=""> <br><br>

        <label for="">Upload Gambar :</label> 
        <input type="file" name="gambar"> <br><br>

        <input type="submit" name="kirim" id="" >
    </form>
</body>
</html>