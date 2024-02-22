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
                <form action="proses-edit-artikel.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from artikel where artikel_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="hidden" name="artikel_id" value="<?php echo $row['artikel_id']?>" class="form-control">
                        <input type="text" name="judul" value="<?php echo $row['judul']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="konten">Konten</label>
                        <textarea name="konten" class="form-control"><?php echo $row['konten']?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_publikasi">Tanggal Publikasi</label>
                        <input type="date" name="tanggal_publikasi" value="<?php echo $row['tanggal_publikasi']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" name="penulis" value="<?php echo $row['penulis']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <input type="text" name="kategori" value="<?php echo $row['kategori']?>" class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>