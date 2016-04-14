<?php
	
require_once "../config/conect.php";
                     	                      	
?>

<div class="grid_container">
<div class="grid_12">
<div class="widget_wrap">
<div class="widget_top"> <span class="h_icon list"></span>
<h6>Tambah Matakuliah</h6>
</div>
<div class="widget_content">
<form action="" method="post" id="form103"
class="form_container left_label valid_tip"><!--belu dikasih mmethod-->

<ul>
<li>
<div class="form_grid_12"> <label class="field_title"
id="llastname" for="lastname">Kode Matakuliah<span class="req">*</span></label>
<div class="form_input"> <input id="kode" name="kode"
value="" maxlength="100"class="limiter required" type="text"> </div>
</div>
</li>

<li>
<div class="form_grid_12"> <label class="field_title"
id="llastname" for="lastname">Nama Matakuliah<span class="req">*</span></label>
<div class="form_input"> <input id="matkul" name="matkul"
value="" maxlength="100" class="limiter required" type="text"> </div>
</div>
</li>
<script type="text/javascript">
    function digitsOnly(obj){
      obj.value=obj.value.replace(/[^\d]/g,'');
    }
</script>
<li>
<div class="form_grid_12"> <label class="field_title"
id="llastname" for="lastname">Jumlah SKS<span class="req">*</span></label>
<div class="form_input" > <input id="sks" name="sks"
value="" maxlength="100" class="limiter required" type="text" onkeyup="digitsOnly(this)" onblur="digitsOnly(this)" > </div>
</div>
</li>

<li>
<div class="form_grid_12"> <label class="field_title"
id="llastname" for="lastname">Semester<span class="req">*</span></label>
<div class="form_input">
<select name="semester">
  					<option value="">-- Pilih --</option>
  					 <option value="1">Semester 1</option>
  					<option value="2">Semester 2</option>
					<option value="3">Semester 3</option>
  					<option value="4">Semester 4</option>
					<option value="5">Semester 5</option>
  					<option value="6">Semester 6</option>
  					<option value="7">Semester 7</option>
  					<option value="6">Semester 8</option>
				</select>
 </div>
</div>
</li>

<li>
<div class="form_grid_12">
<div class="form_input"> <button type="submit"
class="btn_small btn_blue"><span>Submit</span></button> <button
type="reset" class="btn_small btn_blue"><span>Reset</span></button> </div>
</div>
</li>
</ul>
</form>


<?php 

	include "../config/conect.php";
if(isset($_POST['kode'])){
$Kode = $_POST[kode];
$Matkul = $_POST[matkul];
$SKS = $_POST[sks];
$Semester = $_POST[semester];
$query = mysql_query("insert into matkul values ('','$Kode','$Matkul','$SKS','$Semester')");
			if($query){
				echo "<br>";
			echo "<script>alert('Berhasil Menyimpan Data');document.location.href='index.php?page=matakuliah'</script>";
				
			}else{
				//echo "gagal";
			echo "<script>alert('Gagal Menyimpan Data ');document.location.href='index.php?page=matakuliah'</script>";
				
				echo mysql_error();
			} 
		}else{
			unset($_POST['kode']);
		}
?>

</div>
</div>
</div>
</div>
