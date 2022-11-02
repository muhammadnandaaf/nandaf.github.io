<?php
    require 'koneksi.php';

    $result = mysqli_query($db, "SELECT * FROM kotak");
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
    <h3>Data Mahasiswa</h3>
    <a href="add.php">Tambah Data</a>
    <table border='1'>
        <tr>
            <th>id</th>
            <th>nama_pengunjung</th>
            <th>tanggal_kunjungan</th>
            <th>instansi</th>
            <th>telpon</th>
            <th colspan='2'>action</th>
        </tr>
        <?php 
            $i = 1;
            while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?=$i;?></td>
            <td><?=$row['nama_pengunjung']?></td>
            <td><?=$row['tanggal_kunjungan']?></td>
            <td><?=$row['instansi']?></td>
            <td><?=$row['telepon']?></td>
            <td><a href="update.php?id=<?=$row['id']?>">Update Data </a></td>
            <td><a href="delete.php?id=<?=$row['id']?>">Delete Data</a></td>
        </tr>
            <?php
            $i++;
                }
            ?>
    </table> <br>

    <form action="" method="POST">
        <label for="">Cari Nama</label><br><br>
        <input type="text" name="search"> 
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    $con = new PDO ("mysql:host=localhost;dbname=phpcrud",'root','');
    if (isset($_POST["submit"])){
        $str = $_POST["search"];
        $sth = $con->prepare("SELECT * FROM 'search' WHERE nama_pengunjung = '$str'");

        $sth->setFetchMode(PDO::FETCH_OBJ);
        $sth->execute();

        if($row=$sth->fetch()){
            ?>
            <br><br>
            <table>
                <tr>
                    <th>id</th>
                    <th>nama_pengunjung</th>
                    <th>tanggal_kunjungan</th>
                </tr>
                <tr>
                    <td><?php echo $row->id;?></td>
                    <td><?php echo $row->nama_pengunjung;?></td>
                    <td><?php echo $row->tanggal_kunjungan;?></td>
                </tr>
            </table>
<?php             
        }
  
        else{
            echo "Nama Tidak Ditemukan";
        }   
    }