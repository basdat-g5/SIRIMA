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
  <h2 align="center">HASIL SELEKSI</h2>
  <form class="form-horizontal" action="">
  <?php
		$query = pg_query("select distinct p.id, pl.nama_lengkap, p.status_lulus, pst.jenjang, pst.nama_fakultas, p.npm from pendaftaran p, pelamar pl, program_studi pst, pendaftaran_prodi pp where p.id = pp.id_pendaftaran and p.pelamar = pl.username and  pp.kode_prodi = pst.kode and p.id=".$_POST['id_pendaftaran'].";");
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
        <p class="form-control-static"><?php echo $data['nama_lengkap']; ?>o</p>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Status:</label>
      <div class="col-sm-10">
        <p class="form-control-static"><?php if($data['status_lulus'] == "t"){
		 echo "LULUS";}
		 else { echo "TIDAK LULUS";}?></p>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Prodi:</label>
      <div class="col-sm-10">
        <p class="form-control-static"><?php echo $data['jenjang'].' '.$data['nama_fakultas']; ?></p>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Npm:</label>
      <div class="col-sm-10">
        <p class="form-control-static"><?php if($data['status_lulus'] == "t"){
		 echo $data['npm'];}
		 else { echo " - ";}?></p>
      </div>
    </div>
	<?php } ?>
  </form>
    </div>
</div>

</body>
<?php include "footerPage.php";?>
</html>
