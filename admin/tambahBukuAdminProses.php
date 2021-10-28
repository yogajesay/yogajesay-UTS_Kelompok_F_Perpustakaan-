<?php
    session_start();
    if(isset($_POST['tambah'])){

        require ('../config.php');

        $judul_buku = $_POST['judul_buku'];
        $nama_pengarang = $_POST['nama_pengarang'];
        $nama_penerbit = $_POST['nama_penerbit'];

        

        $queryUpdate = 
        "INSERT INTO buku (judul_buku,nama_pengarang,nama_penerbit) VALUES ('$judul_buku','$nama_pengarang','$nama_penerbit')
        "
        or die(mysqli_eror($con));

        $update = mysqli_query($con, $queryUpdate);



        if($update){
            echo
                '<script>
                alert("data berhasi di dibuat"); 
                </script>';
                header('Location: daftarBukuAdmin.php');
        }else{
            echo
                '<script>
                alert("data gagal di dibuat");
                </script>';
                header('Location: daftarBukuAdmin.php');
        }
        
    }else{
            echo
            '<script>
            alert("proses tambah buku gagal");
            window.history.back()
            </script>';
        }

?>