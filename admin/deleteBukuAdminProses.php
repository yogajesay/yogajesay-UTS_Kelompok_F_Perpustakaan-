<?php
    if(isset($_GET['id'])){
        require ('../config.php');
        $id = $_GET['id'];

        $queryDelete = mysqli_query($con, "DELETE FROM buku WHERE id='$id'") or die(mysqli_eror($con)); 
        if($queryDelete){
            echo
            '<script>
            alert("Delete Succes"); 
            </script>';
            header('Location: daftarBukuAdmin.php');
        }else{
            echo'
            <script>
            alert("Delete Failed"); 
            </script>
            ';
            header('Location: daftarBukuAdmin.php');
        }
        
    }else{
        echo
        '<script>
        window.history.back()
        </script>';
        }

?>