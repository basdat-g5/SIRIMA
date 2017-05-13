<?php
/**
 * Created by PhpStorm.
 * User: ArriKurniawan
 * Date: 5/6/2017
 * Time: 3:52 PM
 */
include "headerPage.php";
$params = "";
if (isset($_POST["jenjang"]))
{ $params = $_POST["jenjang"];}

if($params == "S1") {
?>
    <div class="container" style="margin-top: 75px;">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">FORM PENDAFTARAN SEMAS SARJANA</h3>
                    </div>
                    <div class="panel-body">
                        <form accept-charset="UTF-8" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <label for="category_code" class="control-label">Asal Sekolah</label>
                                    <input class="form-control" placeholder="Asal Sekolah" name="asal_sekolah" type="text"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="category_name" class="control-label">Jenis SMA</label>
                                    <select class="form-control" name="jenjang" required>
                                        <option value="">-- Pilih Jenis SMA --</option>
                                        <option value="IPA">IPA</option>
                                        <option value="IPS">IPS</option>
                                        <option value="Bahasa">Bahasa</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="category_name" class="control-label">Alamat Sekolah</label>
                                    <textarea class="form-control" placeholder="Alamat Sekolah" name="alamat_sekolah"
                                           required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="category_name" class="control-label">NISN</label>
                                    <input class="form-control" placeholder="NISN" name="nisn" type="text"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="category_name" class="control-label">Tanggal Lulus</label>
                                    <input class="form-control datepicker" placeholder="Asal Sekolah" name="tgl_lulus" type="date"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="category_name" class="control-label">Nilai UAN</label>
                                    <input class="form-control" placeholder="Nama kategori" name="category_name" type="text"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="category_name" class="control-label">Prodi Pilihan 1</label>
                                    <select class="form-control" name="jenjang" required>
                                        <option value="">-- Pilih Prodi Ke-1 --</option>
                                        <option value="IPA">S1 - Ilmu Komputer</option>
                                        <option value="IPS">S1 - Sistem Informasi</option>
                                        <option value="Bahasa">S1 - Sastra Belanda</option>
                                        <option value="Bahasa">S1 - Sastra Jepang</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="category_name" class="control-label">Prodi Pilihan 2</label>
                                    <select class="form-control" name="jenjang" required>
                                        <option value="">-- Pilih Prodi Ke-2 --</option>
                                        <option value="IPA">S1 - Ilmu Komputer</option>
                                        <option value="IPS">S1 - Sistem Informasi</option>
                                        <option value="Bahasa">S1 - Sastra Belanda</option>
                                        <option value="Bahasa">S1 - Sastra Jepang</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="category_name" class="control-label">Prodi Pilihan 3</label>
                                    <select class="form-control" name="jenjang" required>
                                        <option value="">-- Pilih Prodi Ke-3 --</option>
                                        <option value="IPA">S1 - Ilmu Komputer</option>
                                        <option value="IPS">S1 - Sistem Informasi</option>
                                        <option value="Bahasa">S1 - Sastra Belanda</option>
                                        <option value="Bahasa">S1 - Sastra Jepang</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="category_name" class="control-label">Lokasi Kota Ujian</label>
                                    <select class="form-control" name="jenjang" required>
                                        <option value="">-- Pilih Kota Ujian --</option>
                                        <option value="IPA">Depok</option>
                                        <option value="IPS">Jakarta</option>
                                        <option value="Bahasa">Bandung</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="category_name" class="control-label">Lokasi Tempat Ujian</label>
                                    <select class="form-control" name="jenjang" required>
                                        <option value="">-- Pilih Tempat Ujian --</option>
                                        <option value="IPA">Kampus UI Depok</option>
                                        <option value="IPS">Kampus UI Salemba</option>
                                        <option value="Bahasa">Gedung Serbaguna ABC</option>
                                    </select>
                                </div>
                            </fieldset>
                        </form>
                        <hr/>
                        <input class="btn btn-lg btn-primary btn-block" type="submit" value="SIMPAN" onclick="window.location.href = 'pembayaran.php';">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } include "footerPage.php"; ?>