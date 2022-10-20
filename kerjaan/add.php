<?php 

    require 'koneksi.php';
    if(isset($_POST['kirim'])){
        $nama = $_POST['nama_pengunjung'];
        $tgl = $_POST['tanggal_kunjungan'];
        $instansi = $_POST['instansi'];
        $telepon = $_POST['telepon'];

        $result = mysqli_query($db, "INSERT INTO kotak (nama_pengunjung,tanggal_kunjungan,instansi,telepon)
        VALUES ('$nama','$tgl','$instansi','$telepon')");

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
        <input type="text" name="nama_pengunjung"><br>
        <label for="">Tanggal Berkunjung : </label><br>
        <input type="text" name="tanggal_kunjungan"> <br>
        <label for="">Instansi : </label><br>
        <input type="text" name="instansi"> <br>
        <label for="">No Telpon : </label> <br>
        <input type="text" name="telepon" id=""> <br>
        <input type="submit" name="kirim" id="">
    </form>
</body>
</html>