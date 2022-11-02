<?php 

    require 'koneksi.php';
    // Menangkap ID dari url yang dikirimkan
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    // Tampilkan Value Inputan dari ID 
    $result = mysqli_query($db,
        "SELECT * FROM kotak WHERE id='$id'");
    $row = mysqli_fetch_array($result);


    if(isset($_POST['kirim'])){
        $nama = $_POST['nama_pengunjung'];
        $tgl = $_POST['tanggal_kunjungan'];
        $instansi = $_POST['instansi'];
        $telepon = $_POST['telepon'];

        $result = mysqli_query($db, 
        "UPDATE kotak SET 
            nama_pengunjung = '$nama',
            tanggal_kunjungan = '$tgl',
            instansi = '$instansi',
            telepon = '$telepon'
        WHERE id='$id'");

        if($result){
            echo "
            <script>
                alert('Data Berhasil di Update')
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
    <h3>Edit Data Pengunjung</h3>
    <form action="" method="post">
        <label for="">Nama Lengkap : </label><br>
        <input type="text" name="nama_pengunjung" value=<?=$row['nama_pengunjung']?>> <br><br>
        <label for="">Tanggal Berkunjung : </label><br>
        <input type="text" name="tanggal_kunjungan" value=<?=$row['tanggal_kunjungan']?>> <br><br>
        <label for="">Asal Instansi : </label><br>
        <input type="text" name="instansi" value=<?=$row['instansi']?>> <br><br>
        <label for="">No Telpon : </label> <br>
        <input type="text" name="telepon" value=<?=$row['telepon']?>> <br><br>
        <input type="submit" name="kirim" id="">
    </form>
</body>
</html>