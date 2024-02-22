<?php include "header.php"; ?><br><br><br>

                
                <?php 

                    if(@$_GET['pesan']=="inputBerhasil"){

                    ?>
                                    <div class="alert alert-success">
                                    Terima kasih, Anda telah berhasi mendaftar!
                                    </div>
                    <?php

                    }

                    ?>
                    
                    <div class="container">



        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">PENDAFTARAN KIP KULIAH</h2><br><br><br>
            <form action="proses-kipkuliah.php" method="post">

                 <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control" name="nik" placeholder="Nik anda" required>
                </div>

                <div class="form-group">
                    <label for="nama">NAMA LENGKAP</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap (Sesuai KTP)" required>
                </div>

                 <div class="form-group">
                    <label for="jenis_kelamin">JENIS KELAMIN</label>
                    <select class="form-control" name="jenis_kelamin">
                        <option value="LAKI-LAKI">LAKI-LAKI</option>
                        <option value="PEREMPUAN">PEREMPUAN</option>
                    </select>
                </div>

                 <div class="form-group">
                    <label for="no_hp">NOMOR HP/WA</label>
                    <input type="number" class="form-control" name="no_hp" placeholder="Nomor Handphone/WA" required>
                </div>

                 <div class="form-group">
                    <label for="no_hp">NOMOR HP/WA ORANG TUA/WALI</label>
                    <input type="number" class="form-control" name="no_hp_orangtua" placeholder="Nomor Handphone/WA Orang Tua/Wali" required>
                </div>

                 <div class="form-group">
                    <label for="email">EMAIL</label>
                    <input type="email" class="form-control" name="email" placeholder="Email anda" required>
                </div>

                <button type="submit" class="btn btn-primary">KIRIM</button>
            </form>
            </div>
        </div>
    </div><br><br><br>

    <?php include "footer.php"; ?>