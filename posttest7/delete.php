<?php 

require 'koneksi.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $result = mysqli_query($db,"DELETE FROM kotak WHERE id=$id");
    
    if($result){
        echo "
        <script>
            alert('Data Berhasil DiHapus')
            document.location.href='read.php';
        </script>";
    }
}