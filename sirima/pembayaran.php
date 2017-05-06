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
                        <h3 class="panel-title text-center">FORM PEMBAYARAN</h3>
                    </div>
                    <div class="panel-body">
                        <form accept-charset="UTF-8" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <label for="category_code" class="control-label">ID Pendaftaran</label>
                                    <input class="form-control" placeholder="Asal Sekolah" name="asal_sekolah" type="text"
                                           value="1234" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="category_name" class="control-label">Biaya Pendaftaran</label>
                                    <input class="form-control" placeholder="Asal Sekolah" name="asal_sekolah" type="text"
                                           value="Rp. 500,000" readonly>
                                </div>
                            </fieldset>
                        </form>
                        <hr/>
                        <input class="btn btn-lg btn-primary btn-block" type="submit" value="BAYAR" onclick="window.location.href = 'statusPendaftaran.php';">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include "footerPage.php"; ?>