<!doctype HTML>
<html>
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Website Teknik Informatika</title>
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../bootstrap/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="../bootstrap/css/styles.css" rel="stylesheet">
  <script src="../bootstrap/plugins/ckeditor/ckeditor.js"></script>
   <style>
      body {
        padding-top: 60px;
      }
      /* Ubah warna teks pada judul navbar dan nama-nama menu menjadi putih */
      .navbar-inverse .navbar-brand,
      .navbar-inverse .navbar-nav > li > a {
        color: #ffffff; /* Warna putih */
      }
      /* Ubah warna teks menu saat dihover menjadi putih */
      .navbar-inverse .navbar-nav > li > a:hover,
      .navbar-inverse .navbar-nav > li > a:focus {
        color: #ffffff; /* Warna putih */
      }
    </style></head>
<body>
    
	<!-- Awal script Navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle Nav</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">TEKNIK INFORMATIKA</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
							<a href="index.php"><span class="glyphicon glyphicon-home"></span> HOME <span class="sr-only">(current)</span></a>
						</li>
            <li>
							<a href="tampil-artikel.php"><span class="glyphicon glyphicon-book"></span> ARTIKEL</a>
						</li>
             <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-tasks"></span> DATA PENDAFTARAN MAHASISWA <span class="caret"></span>
            </a>
              <ul class="dropdown-menu">
                <li><a href="tampil-reguler.php">REGULER</a></li>
                <li><a href="tampil-kipkuliah.php">KIP KULIAH</a></li>
              </ul>
            </li>

            <li>
							<a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> PESAN KONTAK</a>
						</li>
            <li>
							<a href="tampil-user.php"><span class="glyphicon glyphicon-registration-mark"></span> USER</a>
						</li>
              <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></li>
             
          </li>
          </ul>
        </div>
      </div>
    </nav><!-- Akhir script Navbar -->