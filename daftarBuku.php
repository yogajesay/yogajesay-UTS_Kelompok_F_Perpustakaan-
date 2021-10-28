<?php
    include 'komponen/navbar.php';

    if(isset($_SESSION['isLogin'])){
        $id = $_SESSION['user']['id'];   ////PENGAMBILAN DATA DARI SESSION LOGIN////
        $sql = "SELECT * FROM users where id = '$id'";
        $query = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($query);


    }else {
        echo 
        '<script>
        alert("Silahkan Login terlebih dahulu");
        window.location ="login.php"
        </script>';   
    }           
?>


<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top 5px solid #17337A; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgbe(0,0,0,0.19);">
    <h4>DAFTAR BUKU</h4>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Col</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Nama Pengarang</th>
                <th scope="col">Nama Penerbit</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = mysqli_query($con, "SELECT * FROM buku") or die (mysqli_eror($con));

                if(mysqli_num_rows($query)==0){
                    echo '<td> <td colspan="7">Tidak ada data</td></tr>';
                }else{
                    $no = 1;
                    while($data = mysqli_fetch_assoc($query)){
                        echo'
                        <tr>
                            <th scope="row">'.$no.'</th>
                            <td>'.$data['judul_buku'].'</td>
                            <td>'.$data['nama_pengarang'].'</td>
                            <td>'.$data['nama_penerbit'].'</td>
                            <td>
                                <a href="#?id='.$data['id'].'">Pinjam</a>
                            </td>
                        </tr>';
                    $no++;
                    }
                }

            ?>
        </tbody>
    </table>
</div>

</aside>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
