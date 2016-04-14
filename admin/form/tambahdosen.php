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
<h6>Tambah Dosen<br></h6>
</div><div class='widget_content'>

<div class="widget_content" >
<form  action="index.php?page=tambahdosen" method="post" id="form103" class="form_container left_label">
<ul>

<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Nip Dosen<span class="req">*</span></label>
<div class="form_grid_4 alpha"> <input id="stb" name="nip"
value="" maxlength="50"  class="limiter required" type="text" onkeyup="digitsOnly(this)" onblur="digitsOnly(this)"> </div>
</div>
</li>

<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Nama Dosen<span class="req">*</span></label>
<div class="form_grid_4 alpha"> <input id="stb" name="nama"
value="" maxlength="50"  class="limiter required" type="text"> </div>
</div>
</li>


<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Jenis Kelamin<span class="req">*</span></label>
<div class="form_grid_4 alpha"> <input type="radio" name="jk" id="Laki-Laki" value="Laki-Laki">Laki-Laki
				<input type="radio" name="jk" id="Perempuan" value="Perempuan">Perempuan </div>
</div>
</li>


<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Alamat<span class="req">*</span></label>
<div class="form_grid_4 alpha"> <input id="stb" name="alamat"
value="" maxlength="50"  class="limiter required" type="text"> </div>
</div>
</li>


<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Hp<span class="req">*</span></label>
<div class="form_grid_4 alpha"> <input id="stb" name="no_tlpn"
value="" maxlength="50"  class="limiter required" type="text" onkeyup="digitsOnly(this)" onblur="digitsOnly(this)"> </div>
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

if(isset($_POST['nip'])){
$Nip = $_POST[nip];
$Nama = $_POST[nama];
$JK = $_POST[jk];
$Alamat = $_POST[alamat];
$No_Tlpn = $_POST[no_tlpn];
$query = mysql_query("insert into dosen values ('$Nip','$Nama','$JK','$Alamat','$No_Tlpn')");
			if($query){
				echo "<br>";
			echo "<script>alert('Berhasil Menyimpan Data');document.location.href='index.php?page=dosen'</script>";
				
			}else{
				//echo "gagal";
			echo "<script>alert('Gagal Menyimpan Data ');document.location.href='index.php?page=dosen'</script>";
				
				echo mysql_error();
			} 
		}else{
			unset($_POST['nip']);
		}
?>
</div>
</div>
</div>
		
