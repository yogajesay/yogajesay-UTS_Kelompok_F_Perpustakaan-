<?php
    include 'komponen/navbar.php';

    if(isset($_SESSION['isLogin'])){
        
        $id = $_SESSION['user']['id'];   ////PENGAMBILAN DATA DARI SESSION LOGIN////
        $sql = "SELECT * FROM users where id = '$id'";
        $query = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($query);
        

        echo "Selamat Datang, ", $row["nama"]
        ;

    }else {
        echo '<script>
        alert("Silahkan Login terlebih dahulu");
        window.location ="login.php"
        </script>';           
    }
?>