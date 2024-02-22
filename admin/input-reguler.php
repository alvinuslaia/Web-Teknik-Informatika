<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php";?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-input-reguler.php" method="POST">
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="number" name="nik" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="nama">NAMA LENGKAP</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="form-group">
                    <label for="jenis_kelamin">JENIS KELAMIN</label>
                    <select class="form-control" name="jenis_kelamin">
                        <option value="LAKI-LAKI">LAKI-LAKI</option>
                        <option value="PEREMPUAN">PEREMPUAN</option>
                    </select>
                     </div>


                     <div class="form-group">
                        <label for="no_hp">NO HP/WA</label>
                        <input type="number" name="no_hp" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="no_hp_orangtua">NO HP/WA ORANG TUA/WALI</label>
                        <input type="number" name="no_hp_orangtua" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">EMAIL</label>
                        <input type="email" name="email" class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
<?php include "footer.php";?>