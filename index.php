<?php
$appName = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$connStr = "host=localhost port=5432 dbname=arri.kurniawan user=arri.kurniawan";

//simple check
$conn = pg_connect($connStr);
$result = pg_query($conn, "select * from sirima.akun");
var_dump(pg_fetch_all($result));

?>