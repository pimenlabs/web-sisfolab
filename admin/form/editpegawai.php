<?php
	
require_once "../config/conect.php";
      $id=$_GET['nip'];

// Retrieve data from database 
$sql="SELECT * FROM pegawai WHERE Nip='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
                      	                      	
?>
<script type="text/javascript">
    function digitsOnly(obj){
      obj.value=obj.value.replace(/[^\d]/g,'');
    }
</script>
<div class='grid_12'>
<div class='widget_wrap'>
<div class='widget_top'> <span class='h_icon blocks_images'></span>
<h6>Edit Daftar Pegawai <br></h6>
</div><div class='widget_content'>

<div class="widget_content" >

<form  action="" method="post" id="form103" class="form_container left_label valid_tip" >
<ul>

<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Nip<span class="req">*</span></label></div>
 <div class="form_grid_4 alpha"> <input id="nip" name="nip" value="<?php echo $rows['Nip']; ?>" maxlength="50" tabindex="1" class="limiter required" type="text"  onkeyup="digitsOnly(this)" onblur="digitsOnly(this)"> 
</div>
</li>


<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Nama Pegawai<span class="req">*</span></label>
 <div class="form_grid_4 alpha"> <input id="nip" name="nama"
value="<?php echo $rows['Nama']; ?>" maxlength="50" tabindex="1" class="limiter required" type="text"> </div>
</div>
</li>


<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Nama Pegawai<span class="req">*</span></label>
 <div class="form_grid_4 alpha"> <input id="nip" name="jk"
value="<?php echo $rows['JK']; ?>" maxlength="50" tabindex="1" class="limiter required" type="text"> </div>
</div>
</li>


<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Alamat<span class="req">*</span></label>
 <div class="form_grid_4 alpha"> <input id="nip" name="alamat"
value="<?php echo $rows['Alamat']; ?>" maxlength="50" tabindex="1" class="limiter required" type="text"> </div>
</div>
</li>

<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Contact<span class="req">*</span></label>
 <div class="form_grid_4 alpha"> <input id="nip" name="hp"
value="<?php echo $rows['No_Tlpn']; ?>" maxlength="50" tabindex="1" class="limiter required" type="text"  onkeyup="digitsOnly(this)" onblur="digitsOnly(this)"> </div>
</div>
</li>

<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Password<span class="req">*</span></label>
 <div class="form_grid_4 alpha"> <input id="nip" name="pass"
value="<?php echo $rows['Password']; ?>" maxlength="50" tabindex="1" class="limiter required" type="text"  > </div>
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
$pass = $_POST[pass];

$query = mysql_query("update pegawai set Nama='$Nama',JK='$JK',Alamat='$Alamat',No_Tlpn='$HP',Password='$pass' where Nip='$Nip'");
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
		
