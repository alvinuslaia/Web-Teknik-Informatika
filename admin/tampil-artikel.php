<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Artikel</h1>
            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>
            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Perubahan Berhasil!
                    </div>
            <?php

            }

            ?>


        <table  class="table table-bordered table-hover" id="data-table">
        <thead>
            <tr>
                <th>Judul</th><th>Konten</th><th>Tanggal Publikasi</th><th>Penulis</th><th>Kategori</th>
                <th>
                    <a href="input-artikel.php">
                        <button class="btn btn-success">Tambah</button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from artikel order by judul ASC");
        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['judul']?></td>
                <td><?php echo $row['konten']?></td>
                <td><?php echo $row['tanggal_publikasi']?></td>
                <td><?php echo $row['penulis']?></td>
                <td><?php echo $row['kategori']?></td>
                <td>

                <a href="edit-artikel.php?id=<?php echo $row['artikel_id']?>">
                    <button class="btn btn-xs btn-primary">Edit</button>
                </a>

                <a href="hapus-artikel.php?id=<?php echo $row['artikel_id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-danger">Hapus</button>
                </a>

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>


<?php include "footer.php";?>