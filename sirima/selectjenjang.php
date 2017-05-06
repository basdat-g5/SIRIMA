<!DOCTYPE HTML>
<html>
<head>
    <title>sirima-G5</title>
    <link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.css" />
</head>
<?php include "headerPage.php"; ?>
<body style="background: #fcdb00;">
<div class="container" style="margin-top: 100px;">
    <div class="well">
    <h2 align="center">FORM PEMILIHAN JENJANG</h2>
    <form action="viewrekappendaftaran.php">
        <div class="form-group">
            <label for="sel1">PERIODE : </label>
            <select class="form-control" id="sel1">
                <option>1-2007</option>
                <option>2-2008</option>
                <option>3-2009</option>
            </select>
            <br>
            <label for="sel1">JENJANG : </label>
            <select class="form-control" id="sel1">
                <option>S1</option>
                <option>S2</option>
                <option>S3</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Lihat Rekap Pendaftaran</button>

    </form>
    </div>
</div>
</body>
<br>
<?php include "footerPage.php"; ?>
</html>