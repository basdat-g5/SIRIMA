<?php
/**
 * Created by PhpStorm.
 * User: ArriKurniawan
 * Date: 5/13/2017
 * Time: 5:16 PM
 */
include "dbconfig.php";
if (!empty($_POST['kota'])) {
    $getUpdatedTempat = "select distinct tempat from lokasi_ujian where kota = $1";
    $listTempat = pg_query_params($dbConn, $getUpdatedTempat, array($_POST['kota']));

    while ($row = pg_fetch_assoc($listTempat)) {
        $myarray[] = array(
            "value" => $row["tempat"],
            "text" => $row["tempat"]
        );
    }

    echo json_encode($myarray);
}
pg_close($dbConn);