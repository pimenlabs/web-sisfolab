<?php
require_once "../config/conect.php";
?>


<script type="text/javascript">
    function digitsOnly(obj){
      obj.value=obj.value.replace(/[^\d]/g,'');
    }
</script>
<div class='grid_12'>
<div class='widget_wrap'>
<div class='widget_top'> <span class='h_icon blocks_images'></span>
<h6>Tambah Mahasiswa<br></h6>
</div>

<div class="widget_content" >
<form action="" method="post" id="form103" class="form_container left_label valid_tip">
<ul>

<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Stambuk<span class="req">*</span></label>
<div class="form_input"> <input id="stb" name="stb"
class="limiter required" value="130" maxlength="50" type="text" onkeyup="digitsOnly(this)" onblur="digitsOnly(this)"> </div>
</div>
</li>

<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Nama Mahasiswa<span class="req">*</span></label>
<div class="form_input"> <input id="stb" name="nama"
 class="limiter required" value="" maxlength="50" type="text"> </div>
</div>
</li>


<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Tempat, Tgl.Lahir<span class="req">*</span></label>
<div class="form_input"> <input id="stb" name="ttl"
 class="limiter required" value="" maxlength="50" type="text"> </div>
</div>
</li>


<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Jenis Kelamin<span class="req">*</span></label>
<div class="form_input"><input type="radio" name="jk" id="Laki-Laki" value="Laki-Laki">Laki-Laki
				<input type="radio" name="jk" id="Perempuan" value="Perempuan">Perempuan </div>
</div>
</li>


<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Alamat<span class="req">*</span></label>
<div class="form_input"> <input id="stb" name="alamat"
 class="limiter required"  value="" maxlength="50" type="text"> </div>
</div>
</li>


<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Agama<span class="req">*</span></label>
<div class="form_input"> <select name="agama">
  					<option value="Islam">Islam</option>
  					<option value="Hindu">Hindu</option>
  					<option value="Kristen Protestan">Kristen Protestan</option>
  					<option value="Kristen Katolik">Kristen Katolik</option>
  					<option value="Buddha">Buddha</option>
				</select> </div>

</div>
</li>

<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Contact<span class="req">*</span></label>
<div class="form_input"> <input id="stb" name="no_tlpn"
 class="limiter required" value="62" maxlength="50" type="text" onkeyup="digitsOnly(this)" onblur="digitsOnly(this)"> </div>
</div>
</li>


<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Asal Sekolah<span class="req">*</span></label>
<div class="form_input"> <input id="stb" name="asal"
 class="limiter required" value="" maxlength="50" type="text"> </div>
</div>
</li>

<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Jurusan<span class="req">*</span></label>
<div class="form_input"> <select name="jurusan">
  					<option value="Teknik Informatika">Teknik Informatika</option>
				</select> </div>
</div>
</li>

<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Angkatan<span class="req">*</span></label>
<div class="form_input"> <input id="stb" name="angkatan"
 class="limiter required" value="" maxlength="50"  type="text" onkeyup="digitsOnly(this)" onblur="digitsOnly(this)"> </div>
</div>
</li>

<li>
<div class="form_grid_12">
<div class="form_input"> <button type="submit"
class="btn_small btn_blue"><span>Submit</span></button> <button
type="reset" class="btn_small btn_blue"><span>Reset</span></button> </div>
</div>
</li>
	</form>
		
<?php 
include "../config/conect.php";
if(isset($_POST['stb'])){
$Stb = $_POST[stb];
$Nama = $_POST[nama];
$TTL = $_POST[ttl];
$JK = $_POST[jk];
$Alamat = $_POST[alamat];
$Agama = $_POST[agama];
$No_Tlpn = $_POST[no_tlpn];
$Asal_Sklh = $_POST[asal];
$Jurusan = $_POST[jurusan];
$Angkatan = $_POST[angkatan];
$query = mysql_query("insert into identitas values ('$Stb','$Nama','$Alamat','$TTL','$Agama','$No_Tlpn','$Asal_Sklh','$Jurusan','$Angkatan','$JK')");
			if($query){
				echo "<script>alert('Berhasil Input');document.location.href='index.php?page=mahasiswa'</script>";
				echo "Berhasil";
			}else{
				echo "<script>alert('Gagal menyimpan data');document.location.href='index.php?page=mahasiswa'</script>";
				echo mysql_error();
			} 
		}else{
			unset($_POST['stb']);
		}
?>
</div>
</div>
