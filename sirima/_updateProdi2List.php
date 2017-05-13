<?php
/**
 * Created by PhpStorm.
 * User: ArriKurniawan
 * Date: 5/13/2017
 * Time: 5:16 PM
 */
include "dbconfig.php";
if (!empty($_POST['kode_prodi1']) && !empty($_POST['jenjang'])) {
    $getUpdatedProdi = "select * from program_studi where jenjang = $1 and kode <> $2";
    $listProdi = pg_query_params($dbConn, $getUpdatedProdi, array($_POST['jenjang'],$_POST['kode_prodi1']));

    while ($row = pg_fetch_assoc($listProdi)) {
        $myarray[] = array(
            "value" => $row["kode"],
            "text" => $row["jenjang"] . " - " . $row["nama"] . " (" . $row["jenis_kelas"] . ")"
        );
    }

    echo json_encode($myarray);
}
pg_close($dbConn);