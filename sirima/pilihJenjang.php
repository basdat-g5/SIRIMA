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
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">FORM PEMILIHAN JENJANG UNTUK PENDAFTARAN</h3>
                    </div>
                    <div class="panel-body">
                        <form accept-charset="UTF-8" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <label for="category_code" class="control-label">Jenjang</label>
                                    <select class="form-control" name="jenjang" required>
                                        <option value="">-- Pilih Jenjang --</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                            </fieldset>
                        </form>
                        <hr/>
                        <input class="btn btn-lg btn-primary btn-block" type="submit" value="PILIH" onclick="window.location.href = 'pendaftaranS1.php';">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include "footerPage.php"; ?>