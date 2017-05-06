<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php include "headerPage.php";?>
<body style="background:#FCDB00">
<div class="container" style="margin-top: 100px;">
<div class="well">
  <h1 align="center">LIHAT RIWAYAT PENDAFTARAN</h1>
  <p>Nama Lengkap : Fadly Muhammad Ridho</p>            
  <table class="table">
    <thead>
      <tr>
        <th>id pendaftaran</th>
        <th>nomor periode</th>
		<th>tahun periode</th>
		<th>no kartu ujian</th>
		<th>jalur</th>
		<th>prodi 1</th>
		<th>prodi 2</th>
		<th>prodi 3</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><a href='detail_pendaftaran_UUI.php'>23</a></td>
        <td>1</td>
		<td>2007</td>
		<td>KOSONG</td>
		<td>UUI</td>
		<td>S1 Teknik Sipil</td>
		<td>S1 Biologi</td>
		<td>-</td>
      </tr>
      <tr>
        <td><a href='detail_pendaftaran_sarjana.php'>323</a></td>
        <td>2</td>
		<td>2008</td>
		<td>3046736640</td>
		<td>SEMAS SARJANA</td>
		<td>S1 Ilmu Komputer</td>
		<td>S1 Teknik Sipil</td>
		<td>S1 Kedokteran</td>
      </tr>
      <tr>
        <td><a href='detail_pendaftaran_pascasarjana.php'>454</a></td>
        <td>3</td>
		<td>2009</td>
		<td>3046736740</td>
		<td>SEMAS PASCASARJANA</td>
		<td>S3 Kedokteran</td>
		<td>-</td>
		<td>-</td>
      </tr>
    </tbody>
  </table>

    <div class="row">
      <ul class="pagination" style="float:right">
        <p>Page :</p>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
      </ul>
    </div>
</div>
</div>
</body>
<?php include "footerPage.php";?>
</html>
