<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<nav class="navbar navbar navbar-expand-lg navbar-light bg-secondary fixed-top" >
     <div class="container-fluid">
       <a class="navbar-brand" style="color: white ;" href="index.php">Perpustakaan</a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" 
aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
         <div class="navbar-nav">
           <a class="nav-link active" aria-current="page" style="color: white ; margin-left: 1000px;" href="login.php">Log in</a>
           <a class="nav-link" style="color: white ;" href="register.php">Sign up</a>
         </div>
       </div>
     </div>
   </nav>    

<div class="bg bg-light text-dark">
        <div class="container min-vh-100 mt-5 d-flex align-items-center justify-content-center">
            <div class="card text-dark bg-light ma-5 shadow" style="min-width: 25rem;">
                <div class="card-header fw-bold">Login</div>
                <div class="card-body">
                    <form action="proses/loginProses.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" >
                        </div>
                        
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" name="login" type="submit">Login</button>
                        </div>
                    </form>
                    <p class="mt-2">Sudah punya akun? <a href="register.php" class="text-primary">Registrasi Disini!</a></p>
                </div>
            </div>

        </div>
    </div>
    
    
</body>
</html>