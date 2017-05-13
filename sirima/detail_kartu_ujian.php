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
  <h2 align="center">KARTU UJIAN</h2>
  <form class="form-horizontal" action="">
  <?php
		$query = pg_query("select distinct p.id, pl.nama_lengkap, ps.no_kartu_ujian, ps.lokasi_tempat, ps.lokasi_kota from pendaftaran p, pelamar pl, pendaftaran_semas ps where p.id = ps.id_pendaftaran and p.pelamar = pl.username and P.id=".$_POST['id_pendaftaran'].";");
		$data = pg_fetch_assoc($query);
		
		if(!$data){
			echo "TIDAK TERDAFTAR";
		}else{
				?>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Id Pendaftaran:</label>
      <div class="col-sm-10">
        <p class="form-control-static"><?php echo $data['id']; ?></p>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nama Lengkap:</label>
      <div class="col-sm-10">
        <p class="form-control-static"><?php echo $data['nama_lengkap']; ?></p>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Nomor Kartu Ujian:</label>
      <div class="col-sm-10">
        <p class="form-control-static"><?php echo $data['no_kartu_ujian']; ?></p>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Lokasi Ujian:</label>
      <div class="col-sm-10">
        <p class="form-control-static"><?php echo $data['lokasi_tempat'].', '.$data['lokasi_kota']; ?></p>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Waktu Ujian:</label>
      <div class="col-sm-10">
        <p class="form-control-static"><?php echo "20/6/2007 08:00 - 24/8/2007 14:00" ?></p>
      </div>
    </div>
	<?php } 
	?>
  </form>
</div>
</div>
</body>
<?php include "footerPage.php";?>
</html>
