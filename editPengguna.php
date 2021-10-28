<?php
    include 'komponen/navbar.php';
    
    if(isset($_SESSION['isLogin'])){
        $id = $_SESSION['user']['id'];   ////PENGAMBILAN DATA DARI SESSION LOGIN////
        $sql = "SELECT * FROM users where id = '$id'";
        $query = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($query);



        echo '<script>
        
        </script>
        '
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Edit Pengguna</title>
</head>
<body>
    
    <div class="bg bg-light text-dark">
        <div class="container min-vh-100  d-flex align-items-center justify-content-center">
            <div class="card text-dark bg-light ma-5 shadow" style="min-width: 25rem;">
                <div class="card-header fw-bold">Edit Pengguna</div>
                <div class="card-body">
                    <form action="proses/editPenggunaProses.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Nama</label>
                            <input class="form-control" id="nama" name="nama"  value="<?php echo $row["nama"]?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Password</label>
                             <input type="password" class="form-control" id="password" name="password" >
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" name="edit" type="submit">Update</button>
                        </div>
                    </form>
                    <br>
                    <div class="d-grid gap-2">
                        <button class="btn btn-danger"><a href="akun.php">Batal</a></button>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>