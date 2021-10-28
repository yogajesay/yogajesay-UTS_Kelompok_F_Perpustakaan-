<?php
    session_start();
    if(isset($_POST['edit'])){

        require ('../config.php');


        $id = $_POST['id'];
        $judul_buku = $_POST['judul_buku'];
        $nama_pengarang = $_POST['nama_pengarang'];
        $nama_penerbit = $_POST['nama_penerbit'];

        

        $queryUpdate = 
        "UPDATE buku SET 
            judul_buku='$judul_buku', nama_pengarang='$nama_pengarang', nama_penerbit='$nama_penerbit'
         where id='$id'"
        or die(mysqli_eror($con));

        $update = mysqli_query($con, $queryUpdate);



        if($update){
            echo
                '<script>
                alert("data berhasi di ubah"); 
                </script>';
                header('Location: daftarBukuAdmin.php');
        }else{
            echo
                '<script>
                alert("data gagal di ubah");
                </script>';
                header('Location: daftarBukuAdmin.php');
        }
        
    }else{
            echo
            '<script>
            alert("proses edit data gagal");
            window.history.back()
            </script>';
        }

?>