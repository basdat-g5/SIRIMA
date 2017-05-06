<?php include "headerPage.php"; ?>
<style>
* {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  font-family: arial;
}

body {
  background: #FFE63B;
}

h1 {
  color: #999;
  text-align: center;
  font-family: arial;
  font-size: 18px;
}

img {
	display: block;
	margin: auto;
}

form#daftar ol li {
    background: #b9cf6a;
    background: rgba(255,255,255,.3);
    border-color: #e3ebc3;
    border-color: rgba(255,255,255,.6);
    border-style: solid;
    border-width: 2px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    line-height: 30px;
    list-style: none;
    padding: 5px 10px;
    margin-bottom: 2px;
}

form#daftar label{
    float: left;
    font-size: 13px;
    width: 110px;
}

.login-form {
  width: 350px;
  padding: 40px 30px;
  background: #eee;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  border-radius: 4px;
  margin: auto;
  position: absolute;
  left: 0;
  right: 0;
  top: 50%;
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
}

.signup-form {
  width: 820px;
  padding: 40px 30px;
  background: #eee;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  border-radius: 4px;
  margin: auto;
  position: absolute;
  left: 0;
  right: 0;
  top: 70%;
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
}

.form-group {
  position: relative;
  margin-bottom: 15px;
}

.form-control {
  width: 30%;
  height: 30px;
  border: none;
  padding: 5px 7px 5px 15px;
  background: #fff;
  color: #666;
  border: 2px solid #ddd;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  border-radius: 4px;
}
.form-control:focus, .form-control:focus + .fa {
  border-color: #10CE88;
  color: #10CE88;
}

.area-control {
  width: 50%;
  height: 100px;
  border: none;
  padding: 5px 7px 5px 15px;
  background: #fff;
  color: #666;
  border: 2px solid #ddd;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  border-radius: 4px;
}
.area-control:focus, .area-control:focus + .fa {
  border-color: #10CE88;
  color: #10CE88;
}

.select-control {
  width: 15%;
  height: 30px;
  border: none;
  padding: 5px 7px 5px 15px;
  background: #fff;
  color: #666;
  border: 2px solid #ddd;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  border-radius: 4px;
}
.select-control:focus, .select-control:focus + .fa {
  border-color: #10CE88;
  color: #10CE88;
}

.form-group .fa {
  position: absolute;
  right: 15px;
  top: 17px;
  color: #999;
}

.log-status.wrong-entry {
  -moz-animation: wrong-log 0.3s;
  -webkit-animation: wrong-log 0.3s;
  animation: wrong-log 0.3s;
}

.log-status.wrong-entry .form-control, .wrong-entry .form-control + .fa {
  border-color: #ed1c24;
  color: #ed1c24;
}

.log-btn {
  background: #0AC986;
  dispaly: inline-block;
  width: 100%;
  font-size: 16px;
  height: 50px;
  color: #fff;
  text-decoration: none;
  border: none;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  border-radius: 4px;
}

.signupbtn {
  background: #0AC986;
  dispaly: inline-block;
  width: 30%;
  font-size: 16px;
  height: 50px;
  color: #fff;
  text-decoration: none;
  border: none;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  border-radius: 4px;
}

.cancelbtn {
  background: #0AC986;
  dispaly: inline-block;
  width: 30%;
  font-size: 16px;
  height: 50px;
  color: #fff;
  text-decoration: none;
  border: none;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  border-radius: 4px;
}

.link {
  text-decoration: none;
  color: #C6C6C6;
  float: right;
  font-size: 12px;
  margin-bottom: 15px;
}
.link:hover {
  text-decoration: underline;
  color: #8C918F;
}

.alert {
  display: none;
  font-size: 12px;
  color: #f00;
  float: left;
}

@-moz-keyframes wrong-log {
  0%, 100% {
    left: 0px;
  }
  20% , 60% {
    left: 15px;
  }
  40% , 80% {
    left: -15px;
  }
}
@-webkit-keyframes wrong-log {
  0%, 100% {
    left: 0px;
  }
  20% , 60% {
    left: 15px;
  }
  40% , 80% {
    left: -15px;
  }
}
@keyframes wrong-log {
  0%, 100% {
    left: 0px;
  }
  20% , 60% {
    left: 15px;
  }
  40% , 80% {
    left: -15px;
  }
}
</style>
<script type="text/javascript" src="js/field_validation.js">
</script>

<div class="signup-form" style="margin-top: 50px; margin-bottom: 50px;">
<form id="daftar" name="daftar" action="" method="post">
<h1>FORM PENDAFTARAN PELAMAR</h1>
<ol>

<div class="form-group">
<li>
<label>Username:</label> 
<input type="text" name="username" class="form-control" value="<?php ?>" required>
</li>
</div>

<div class="form-group">
<li>
<label>Password:</label> 
<input type="password" id="password" name="password" class="form-control" value="<?php ?>" required pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="kombinasi dari huruf kapital, alfabet dan angka serta minimal 8 karakter">
</li>
</div>

<div class="form-group">
<li>
<label>Ulangi Password:</label> 
<input type="password" id="confirmpassword" name="confirmpassword" class="form-control" value="<?php ?>" required>
</li>
</div>

<div class="form-group">
<li>
<label>Nama Lengkap:</label> 
<input type="text" name="email" class="form-control" value="<?php ?>" required>
</li>
</div>

<div class="form-group">
<li>
<label>Nomor Identitas:</label> 
<input type="text" name="email" class="form-control" value="<?php ?>" required>
</li>
</div>

<div class="form-group">
<li>
<label>Jenis Kelamin:</label>
<select name="gender" class="select-control">
	<option value="pria">Pria</option>
    <option value="wanita">Wanita</option>
</select>
</li>
</div>

<div class="form-group">
<li>
<label>Birthday:</label>
<input type="date" name="ttl" class="form-control" value="<?php ?>" required>
</li>
</div>

<div class="form-group">
<li>
<label>Alamat:</label> 
<textarea name="comment" class="area-control" rows="5" cols="40" required></textarea>
</li>
</div>

<div class="form-group">
<li>
<label>Alamat E-mail:</label>
<input type="email" id="email" name="email" class="form-control" value="<?php ?>" required placeholder="example@ui.ac.id">
</li>
</div>

<div class="form-group">
<li>
<label>Ulangi E-mail:</label>
<input type="email" id="confirmemail" name="confirmemail" class="form-control" value="<?php ?>" required placeholder="example@ui.ac.id">
</li>
</div>
<br />
<button id="daftar" name="daftar" value="daftar" class="signupbtn" type="submit">Daftar</button>
<button name="reset" id="reset" value="reset" class="cancelbtn" type="reset">Reset</button>
</ol>
</form>
</div>

<?php include "footerPage.php"; ?>
