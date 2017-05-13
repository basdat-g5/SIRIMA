<!DOCTYPE HTML>
<html>
<head>
    <title>sirima-G5</title>
    <link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.css" />
</head>
<body style="background: #fcd001">
<?php
    include "dbconfig.php";
?>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" style="padding: 10px 10px;" href="index.php">
                <img src="img/ui_logo.png" width="35" style="display: inline-block;">
                <span style="display: inline-block;">SIRIMA G5</span>
            </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="pilihJenjang.php">Pendaftaran</a></li>
                <li><a href="lihat_riwayat_pendaftaran.php">Riwayat Pendaftaran</a></li>
                <li><a href="lihat_kartu_ujian.php">Kartu Ujian</a></li>
                <li><a href="lihat_hasil_seleksi.php">Hasil Seleksi</a></li>
                <li><a href="selectjenjang.php">Rekap Pendaftaran</a></li>
                <li><a href="selectprodi.php">Daftar Pelamar</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php">Login</a></li>
                <li><a href="daftar.php">Daftar</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
