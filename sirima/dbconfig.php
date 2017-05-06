 <?php
	$connStr = "host=localhost port=5432 dbname='arri.kurniawan' user='arri.kurniawan'";
	$dbConn = pg_connect($connStr);
    if(!$dbConn){
        die('Cannot connect:'.pg_last_error());
    }
    pg_query($dbConn, "set search_path to sirima;");
?>