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
    <h2 align="center">FORM PEMILIHAN PRODI</h2>
    <form action="viewpelamarlolos.php">
        <div class="form-group">
            <label for="sel1">PERIODE : </label>
            <select class="form-control" id="sel1">
                <option>1-2007</option>
                <option>2-2008</option>
                <option>3-2009</option>
            </select>
            <br>
            <label for="sel1">Prodi : </label>
            <select class="form-control" id="sel1">
                <option>S1 Kedokteran Reguler</option>
                <option>S1 Matematika Reguler</option>
                <option>S1 Teknik Sipil Reguler</option>
                <option>S2 Fisika Reguler</option>
                <option>S2 Teknik Sipil Reguler</option>
                <option>S1 Biologi Paralel</option>
                <option>S1 Kedokteran Peralel</option>

            </select>
        </div>
        <button type="submit" class="btn btn-success">LIHAT DAFTAR PELAMAR DITERIMA</button>

    </form>
    </div>
</div>
</body>
<br>
<?php include "footerPage.php"; ?>
</html>