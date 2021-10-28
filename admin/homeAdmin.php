<?php
    include '../komponen/navbarAdmin.php';

    if(isset($_SESSION['isLogin'])){
        
        $id = $_SESSION['adminpaw']['id'];   ////PENGAMBILAN DATA DARI SESSION LOGIN////
        $sql = "SELECT * FROM adminpaw where id = '$id'";
        $query = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($query);
        

        echo "Selamat Datang, ", $row["nama"];




    }else {
        echo '<script>
        alert("Silahkan Login terlebih dahulu");
        window.location ="loginAdmin.php"
        </script>';           
    }
?>