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
  <h2 align="center">LIHAT KARTU UJIAN</h2>
  <form class="form-horizontal" action='detail_kartu_ujian.php' method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Id Pendaftaran:</label>
      <div class="col-sm-10">
        <input type="input" class="form-control" id="input" placeholder="Masukkan Id Pendaftaran Anda" name="id_pendaftaran">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">LIHAT</button>
      </div>
    </div>
  </form>
    </div>
</div>

</body>

<?php include "footerPage.php";?>
</html>
