<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
  <h2 align="center">DETAIL PENDAFTARAN UUI</h2>
  <form class="form-horizontal" action='lihat_riwayat_pendaftaran.php'>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Id Pendaftaran:</label>
      <div class="col-sm-10">
        <p class="form-control-static">23</p>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Periode:</label>
      <div class="col-sm-10">
        <p class="form-control-static">1-2007</p>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Rapot:</label>
      <div class="col-sm-10">
        <p class="form-control-static"><a href=#>rapot_23423.pdf</a></p>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Surat Rekomendasi:</label>
      <div class="col-sm-10">
        <p class="form-control-static"><a href=#>rekomendasi_23423.pdf</a></p>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Asal Sekolah:</label>
      <div class="col-sm-10">
        <p class="form-control-static">SMAN 3 Semarang</p>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Jenis SMA:</label>
      <div class="col-sm-10">
        <p class="form-control-static">IPA</p>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Alamat Sekolah:</label>
      <div class="col-sm-10">
        <p class="form-control-static">Jl. MT Haryono no.10 Semarang</p>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">NISN:</label>
      <div class="col-sm-10">
        <p class="form-control-static">9945675367</p>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Tanggal Lulus:</label>
      <div class="col-sm-10">
        <p class="form-control-static">6 Juni 2007</p>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Nilai UAN:</label>
      <div class="col-sm-10">
        <p class="form-control-static">35.54</p>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Prodi Pilihan 1:</label>
      <div class="col-sm-10">
        <p class="form-control-static">S1 Teknik Sipil</p>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Prodi Pilihan 2:</label>
      <div class="col-sm-10">
        <p class="form-control-static">S1 Biologi</p>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10" style="float:center">
        <button type="submit" class="btn btn-default">Kembali</button>
      </div>
    </div>
  </form>
    </div>
</div>

</body>
<?php include "footerPage.php";?>
</html>
