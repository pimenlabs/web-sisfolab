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
<h6>Tambah Daftar Pegawai <br></h6>
</div><div class='widget_content'>

<div class="widget_content" >

<form  action="" method="post" id="form103" class="form_container left_label valid_tip" >
<ul>

<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Nip<span class="req">*</span></label></div>
 <div class="form_grid_4 alpha"> <input id="nip" name="nip" value="" maxlength="50" tabindex="1" class="limiter required" type="text"  onkeyup="digitsOnly(this)" onblur="digitsOnly(this)"> 
</div>
</li>


<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Nama Pegawai<span class="req">*</span></label>
 <div class="form_grid_4 alpha"> <input id="nip" name="nama"
value="" maxlength="50" tabindex="1" class="limiter required" type="text"> </div>
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
 <div class="form_grid_4 alpha"> <input id="nip" name="alamat"
value="" maxlength="50" tabindex="1" class="limiter required" type="text"> </div>
</div>
</li>

<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Contact<span class="req">*</span></label>
 <div class="form_grid_4 alpha"> <input id="nip" name="hp"
value="62" maxlength="50" tabindex="1" class="limiter required" type="text"  onkeyup="digitsOnly(this)" onblur="digitsOnly(this)"> </div>
</div>
</li>

<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Username<span class="req">*</span></label>
 <div class="form_grid_4 alpha"> <input id="nip" name="user"
value="" maxlength="50" tabindex="1" class="limiter required" type="text"  > </div>
</div>
</li>
<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Password<span class="req">*</span></label>
 <div class="form_grid_4 alpha"> <input id="nip" name="pass"
value="" maxlength="50" tabindex="1" class="limiter required" type="text"  > </div>
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
$HP = $_POST[hp];

$user = $_POST[user];
$pass = $_POST[pass];

$query = mysql_query("insert into pegawai values ('$Nip','$Nama','$JK','$Alamat','$HP','$user','$pass')");
			if($query){
				echo "<br>";
			echo "<script>alert('Berhasil Menyimpan Data');document.location.href='index.php?page=pegawai'</script>";
				
			}else{
				//echo "gagal";
			echo "<script>alert('Gagal Menyimpan Data ');document.location.href='index.php?page=pegawai'</script>";
				
				echo mysql_error();
			} 
		}else{
			unset($_POST['nip']);
		}
?>
		
</div>
</div>
</div>
		
