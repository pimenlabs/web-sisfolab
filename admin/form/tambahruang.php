<?php
	
require_once "../config/conect.php";
                     	                      	
?>
<div class='grid_12'>
<div class='widget_wrap'>
<div class='widget_top'> <span class='h_icon blocks_images'></span>
<h6>Tambah Daftar Ruangan <br></h6>
</div><div class='widget_content'>

<div class="widget_content" >

<form  action="index.php?page=tambahruang" method="post" id="form103" class="form_container left_label valid_tip" >
<ul>

<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Ruangan<span class="req">*</span></label>
 <div class="form_grid_4 alpha"> <input id="stb" name="ruang"
value="U-" maxlength="50" tabindex="1" class="limiter required" type="text"> </div>
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
if(isset($_POST['ruang'])){
$Ruang = $_POST[ruang];
$query = mysql_query("insert into ruang values ('$Ruang')");
			if($query){
				echo "<br>";
			echo "<script>alert('Berhasil Menyimpan Data');document.location.href='index.php?page=ruang'</script>";
				
			}else{
				//echo "gagal";
			echo "<script>alert('Gagal Menyimpan Data ');document.location.href='index.php?page=ruang'</script>";
				
				echo mysql_error();
			} 
		}else{
			unset($_POST['ruang']);
		}
?>
		
</div>
</div>
</div>
		
