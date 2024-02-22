<?php include "header.php"; ?><br><br><br>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-12"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Artikel</h2>
					<table class="table table-bordered table-hover" id="data-table">
						<thead>
						<tr>
							<th>Judul</th>
							<th>Konten</th>
							<th>Tanggal Publikasi</th>
							<th>Penulis</th>
							<th>Kategori</th>
						</tr>
						</thead>
						<?php

						include "koneksi.php";
						$sql=$koneksi->query("select * from artikel order by judul ASC");

						while($row= $sql->fetch_assoc()){
						?>
						<tr>
							<td><?php echo $row['judul']?></td>
							<td><?php echo $row['konten']?></td>
							<td><?php echo $row['tanggal_publikasi']?></td>
							<td><?php echo $row['penulis']?></td>
							<td><?php echo $row['kategori']?></td>
						</tr>
						<?php } ?>
						</table>
				</div>
      </div>
			</div><!-- Akhir Kolom Pertama -->
			
		</div><!-- Akhir Baris -->
		</div><!--  Akhir Page -->
		<?php include "footer.php";?>