<?php
    session_start();
    if(isset($_POST['edit'])){

        require ('../config.php');


        $id = $_SESSION['user']['id'];   ////PENGAMBILAN DATA DARI SESSION LOGIN/////
        $nama = $_POST['nama'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $queryUpdate = 
        "UPDATE users SET 
            nama='$nama', password='$password'
         where id='$id'"
        or die(mysqli_eror($con));

        $update = mysqli_query($con, $queryUpdate);



        if($update){
            echo
                '<script>
                alert("data berhasi di ubah"); 
                </script>';
                header('Location: ../akun.php');
        }else{
            echo
                '<script>
                alert("data gagal di ubah");
                </script>';
                header('Location: ../akun.php');
        }
        
    }else{
            echo
            '<script>
            alert("proses edit data gagal");
            window.history.back()
            </script>';
        }

?>