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
                <form action="proses-edit-kipkuliah.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from kipkuliah where kipkuliah_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="hidden" name="kipkuliah_id" value="<?php echo $row['kipkuliah_id']?>" class="form-control">
                        <input type="number" name="nik" value="<?php echo $row['nik']?>" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">JENIS KELAMIN</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="<?php echo $row['jenis_kelamin']?>" selected><?php echo $row['jenis_kelamin']?></option>
                            <option value="LAKI-LAKI">LAKI-LAKI</option>
                            <option value="PEREMPUAN">PEREMPUAN</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="no_hp">NO HP/WA</label>
                        <input type="number" name="no_hp" value="<?php echo $row['no_hp']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="no_hp_orangtua">NO HP/WA ORANG TUA/WALI</label>
                        <input type="number" name="no_hp_orangtua" value="<?php echo $row['no_hp_orangtua']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">EMAIL</label>
                        <input type="email" name="email" value="<?php echo $row['email']?>" class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>