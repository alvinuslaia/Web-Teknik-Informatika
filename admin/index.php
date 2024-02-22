<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?><br><br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron text-center">
                <h1 class="display-4">Admin Dashboard</h1>
                <p class="lead">Kelola Data dan Informasi dengan Baik</p>
            </div>
        </div>
    </div>
</div><!-- Akhir Container -->

<div class="marquee">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="marquee-text text-center">
                    <h2 class="display-5 fw-normal text-white" style="font-size: 18px;">SELAMAT DATANG ADMIN</h2>
                </div>
            </div>
        </div>
    </div>
</div><!-- Akhir Marquee -->
<br><br>
<?php include "footer.php";?>
<style>
    .marquee {
        overflow: hidden;
        white-space: nowrap;
        position: fixed;
        top: 40px; /* Adjust this value as needed */
        left: 0;
        width: 100%;
        background-color: #007bff;
        color: #fff;
        animation: marquee-slide 20s linear infinite;
    }

    .marquee-text {
        display: inline-block;
        padding: 10px 0;
    }

    @keyframes marquee-slide {
        0% { transform: translateX(100%); }
        100% { transform: translateX(-100%); }
    }

    .marquee-text h2 {
        font-weight: 300; /* Mengurangi ketebalan font */
    }
</style>
