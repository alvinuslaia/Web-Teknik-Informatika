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
        <h2>Data Pendaftaran Mahasiswa Reguler</h2>
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
                <th>NIK</th><th>Nama</th><th>Jenis Kelamin</th><th>No HP/WA</th><th>No HP/WA Orang Tua/Wali</th><th>Email</th>
                <th>
                    <a href="input-reguler.php">
                        <button class="btn btn-success">Tambah</button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from reguler order by nik ASC");
        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['nik']?></td>
                <td><?php echo $row['nama']?></td>
                <td><?php echo $row['jenis_kelamin']?></td>
                <td><?php echo $row['no_hp']?></td>
                <td><?php echo $row['no_hp_orangtua']?></td>
                <td><?php echo $row['email']?></td>
                <td>

                <a href="edit-reguler.php?id=<?php echo $row['reguler_id']?>">
                    <button class="btn btn-xs btn-primary">Edit</button>
                </a>

                <a href="hapus-reguler.php?id=<?php echo $row['reguler_id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
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