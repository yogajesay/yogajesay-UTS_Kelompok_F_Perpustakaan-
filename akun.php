<?php
    include 'komponen/navbar.php';
    
    if(isset($_SESSION['isLogin'])){


        $id = $_SESSION['user']['id'];   ////PENGAMBILAN DATA DARI SESSION LOGIN////

        $sql = "SELECT * FROM users where id = '$id'";
        $query = mysqli_query($con,$sql);

        $row = mysqli_fetch_assoc($query);
            
        

        echo '<script>
        
        </script>'
        ;
    }else {
        echo 
        '<script>
        alert("Silahkan Login terlebih dahulu");
        window.location ="login.php"
        </script>';              
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <title>Data pengguna</title>
</head>
<body>  
    <table>
        <tr>
            <td></td>
            <td>
                <h1><?php echo $row["nama"]   ;?></h1>
            </td>
        </tr>
        <tr>
            <td>
                <p>ID : </p>
            </td>
            <td>
                <p><?php echo $_SESSION['user']['id'];?></p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Email :</p>
            </td>
            <td>
                <p><?php echo $row["email"];?></p>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <p><a href="editPengguna.php">Edit Profil</a></p>
            </td>
        </tr>
    </table>


</body>
</html>














