<?php
    require ('../config.php');
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM adminpaw where email = '$email'";
    $query = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) == 0 ){
        echo '<script>
        alert("Email tidak ditemukan!"); 
        window.location ="../index.php"
        </script>';
    }else {
        if($password === $row["password"]){
                session_start();
                $_SESSION['isLogin'] = true;
                $_SESSION['adminpaw'] = $row;   
    
                echo
                '<script>
                alert("Login Succes.."); 
                window.location ="homeAdmin.php"
                </script>';
        
        }else {
            echo
            '<script>
             window.history.back()
            </script>';
        }
    }
?>