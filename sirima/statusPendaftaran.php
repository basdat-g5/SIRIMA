<?php
/**
 * Created by PhpStorm.
 * User: ArriKurniawan
 * Date: 5/6/2017
 * Time: 3:52 PM
 */
include "headerPage.php"; ?>
    <div class="container" style="margin-top: 75px;">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">PENDAFTARAN SUKSES</h3>
                    </div>
                    <div class="panel-body">
                        <h6 class="panel-title text-center">Selamat pembayaran berhasil dilakukan</h6>
                        <form accept-charset="UTF-8" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <label for="category_code" class="control-label">ID Pendaftaran</label>
                                    <input class="form-control" placeholder="Asal Sekolah" name="asal_sekolah" type="text"
                                           value="1234" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="category_name" class="control-label">ID Pembayaran</label>
                                    <input class="form-control" placeholder="Asal Sekolah" name="asal_sekolah" type="text"
                                           value="1541" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="category_name" class="control-label">Nomor Kartu Ujian</label>
                                    <input class="form-control" placeholder="Asal Sekolah" name="asal_sekolah" type="text"
                                           value="1234343565" readonly>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include "footerPage.php"; ?>