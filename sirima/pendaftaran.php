<?php
/**
 * Created by PhpStorm.
 * User: ArriKurniawan
 * Date: 5/6/2017
 * Time: 3:52 PM
 */
include "headerPage.php";
$pJenjang = "";
if (isset($_POST["jenjang"]))
{ $pJenjang = $_POST["jenjang"];}

$getAllProdiByJenjang = "select * from program_studi where jenjang = $1";
$listProdi1 = pg_query_params($dbConn, $getAllProdiByJenjang, array($pJenjang));

$getAllKotaUjian = "select DISTINCT kota from lokasi_ujian";
$listKotaUjian = pg_query($dbConn, $getAllKotaUjian);

if($pJenjang == "S1") {
?>
    <style type="text/css">
        .form-group.required .control-label:after {
            content:"*";
            color:red;
        }
    </style>
    <div class="container" style="margin-top: 75px;">
        <input type="hidden" id="jenjang" name="jenjang" value="<?php echo $pJenjang; ?>">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">FORM PENDAFTARAN SEMAS SARJANA</h3>
                    </div>
                    <div class="panel-body">
                        <form accept-charset="UTF-8" role="form" method="post" action="pembayaran.php">
                            <fieldset>
                                <div class="form-group required">
                                    <label for="category_code" class="control-label">Asal Sekolah</label>
                                    <input class="form-control required" placeholder="Asal Sekolah" id="asal_sekolah"
                                           name="asal_sekolah" type="text" required>
                                </div>
                                <div class="form-group required">
                                    <label for="category_name" class="control-label">Jenis SMA</label>
                                    <select class="form-control" id="jenis_SMA" name="jenis_SMA" required>
                                        <option value="">-- Pilih Jenis SMA --</option>
                                        <option value="IPA">IPA</option>
                                        <option value="IPS">IPS</option>
                                        <option value="Bahasa">Bahasa</option>
                                    </select>
                                </div>
                                <div class="form-group required">
                                    <label for="category_name" class="control-label">Alamat Sekolah</label>
                                    <textarea class="form-control" placeholder="Alamat Sekolah"
                                        id="alamat_sekolah" name="alamat_sekolah" required></textarea>
                                </div>
                                <div class="form-group required">
                                    <label for="category_name" class="control-label">NISN</label>
                                    <input class="form-control" placeholder="NISN" id="nisn" name="nisn" type="text"
                                           maxlength="10" required>
                                </div>
                                <div class="form-group required">
                                    <label for="category_name" class="control-label">Tanggal Lulus</label>
                                    <input class="form-control datepicker" placeholder="Asal Sekolah" id="tgl_lulus" name="tgl_lulus" type="date"
                                           required>
                                </div>
                                <div class="form-group required">
                                    <label for="category_name" class="control-label">Nilai UAN</label>
                                    <input class="form-control" placeholder="Nilai UAN" id="nilai_UAN" name="nilai_UAN" type="text"
                                          onkeypress="return sirima.Page.pendaftaran.isNumberKey(event);" maxlength="6" required>
                                </div>
                                <div class="form-group required">
                                    <label for="category_name" class="control-label">Prodi Pilihan 1</label>
                                    <select class="form-control" name="prodi1" id="prodi1" onchange="sirima.Page.pendaftaran.updateProdi2();" required>
                                        <option value="">-- Pilih Prodi Ke-1 --</option>
                                        <?php while($row_list=pg_fetch_assoc($listProdi1)) { ?>
                                            <option value=<?php echo $row_list["kode"]; ?>>
                                                <?php echo $row_list["jenjang"] . " - " . $row_list["nama"] . " (" . $row_list["jenis_kelas"] . ")"; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="category_name" class="control-label">Prodi Pilihan 2</label>
                                    <select class="form-control" name="prodi2" id="prodi2" onchange="sirima.Page.pendaftaran.updateProdi3();">
                                        <option value="">-- Pilih Prodi Ke-2 --</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="category_name" class="control-label">Prodi Pilihan 3</label>
                                    <select class="form-control" name="prodi3" id="prodi3">
                                        <option value="">-- Pilih Prodi Ke-3 --</option>
                                    </select>
                                </div>
                                <div class="form-group required">
                                    <label for="category_name" class="control-label">Lokasi Kota Ujian</label>
                                    <select class="form-control" id="kota_ujian" name="kota_ujian"
                                            onchange="sirima.Page.pendaftaran.updateTempatUjian();" required>
                                        <option value="">-- Pilih Kota Ujian --</option>
                                        <?php while($row_list=pg_fetch_assoc($listKotaUjian)) { ?>
                                            <option value=<?php echo "'". $row_list["kota"] ."'"; ?>>
                                                <?php echo $row_list["kota"]; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group required">
                                    <label for="category_name" class="control-label">Lokasi Tempat Ujian</label>
                                    <select class="form-control" id="tempat_ujian" name="tempat_ujian" required>
                                        <option value="">-- Pilih Tempat Ujian --</option>
                                    </select>
                                </div>
                            </fieldset>
                            <input class="btn btn-lg btn-primary btn-block" type="submit" value="SIMPAN">
                        </form>
                        <hr/>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } include "footerPage.php"; ?>

<script type="text/javascript">
    sirima.Page.pendaftaran = {
        init: function () {

        }
        , updateProdi2: function () {
            var valProdi = $('#prodi1').val();
            var valJenjang = $('#jenjang').val();
            var objProdi2 = $('#prodi2');
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "_updateProdi2List.php",
                data: {
                    kode_prodi1: valProdi,
                    jenjang: valJenjang
                },
                success: function (updatedProdiList) {
                    sirima.Components.Select.RemoveOptions(objProdi2, false);
                    sirima.Components.Select.UpdateOptions(objProdi2, updatedProdiList);
                }
            });
        }

        , updateProdi3: function () {
            var valProdi = $('#prodi1').val();
            var valProdi2 = $('#prodi2').val();
            var valJenjang = $('#jenjang').val();
            var objProdi3 = $('#prodi3');
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "_updateProdi3List.php",
                data: {
                    kode_prodi1: valProdi,
                    kode_prodi2: valProdi2,
                    jenjang: valJenjang
                },
                success: function (updatedProdiList) {
                    sirima.Components.Select.RemoveOptions(objProdi3, false);
                    sirima.Components.Select.UpdateOptions(objProdi3, updatedProdiList);
                }
            });
        }

        , updateTempatUjian: function () {
            var valKotaUjian = $('#kota_ujian').val();
            var objTempatUjian = $('#tempat_ujian');
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "_updateTempatUjianList.php",
                data: {
                    kota: valKotaUjian
                },
                success: function (updatedTempatList) {
                    sirima.Components.Select.RemoveOptions(objTempatUjian, false);
                    sirima.Components.Select.UpdateOptions(objTempatUjian, updatedTempatList);
                }
            });
        }

        , isNumberKey: function(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode != 46 && charCode > 31
                && (charCode < 48 || charCode > 57))
                return false;

            return true;
        }
    }

    $(function () {

    });
</script>
