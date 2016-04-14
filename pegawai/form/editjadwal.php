<?php	
require_once "../config/conect.php";
// get value of id that sent from address bar
$id=$_GET['id'];

// Retrieve data from database 
$sql="SELECT * FROM jadwal WHERE indeks='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
                     	                      	
?>

<script type="text/javascript">
    function digitsOnly(obj){
      obj.value=obj.value.replace(/[^\d]/g,'');
    }
</script>

<div class="grid_container">
<div class="grid_12">
<div class="widget_wrap">
<div class="widget_top"> <span class="h_icon list"></span>
<h6>Edit jadwal Matakuliah</h6>
</div>
<div class="widget_content">
<form action="" method="post" id="form103" class="form_container left_label valid_tip"><!--belu dikasih mmethod-->

<ul>
<li>
<div class="form_grid_12"> <label class="field_title"
id="llastname" for="lastname">Kode Matakuliah<span class="req">*</span></label>
<div class="form_input"> <input id="kode" name="kode"
value="<?php echo $rows['Kode']; ?>" maxlength="100"class="limiter required" type="text"> </div>
</div>
</li>

<li>
<div class="form_grid_12"> <label class="field_title"
id="llastname" for="lastname">Nama Matakuliah<span class="req">*</span></label>
<div class="form_input"> <input id="matkul" name="matkul"
value="<?php echo $rows['Matkul']; ?>" maxlength="100" class="limiter required" type="text"> </div>
</div>
</li>

<li>
<div class="form_grid_12"> <label class="field_title"
id="llastname" for="lastname">Jumlah SKS<span class="req">*</span></label>
<div class="form_input"> <input id="sks" name="sks"
value="<?php echo $rows['SKS']; ?>" maxlength="100" class="limiter required" type="text"  onkeyup="digitsOnly(this)" onblur="digitsOnly(this)"> </div>
</div>
</li>

<li>
<div class="form_grid_12"> <label class="field_title"
id="llastname" for="lastname">Semester<span class="req">*</span></label>
<div class="form_input">
<input id="sks" name="semester"
value=" <?php echo $rows['Semester']; ?>" maxlength="100" class="limiter required" type="text"  onkeyup="digitsOnly(this)" onblur="digitsOnly(this)">
 </div>
</div>
</li>


<li>
<div class="form_grid_12"> <label class="field_title"
id="llastname" for="lastname">Kelas<span class="req">*</span></label>
<div class="form_input">
<input id="sks" name="kelas"
value=" <?php echo $rows['Kelas']; ?>" maxlength="100" class="limiter required" type="text">
 </div>
</div>
</li>

<li>
<div class="form_grid_12"> <label class="field_title"
id="llastname" for="lastname">Hari<span class="req">*</span></label>
<div class="form_input">
<input id="sks" name="hari"
value=" <?php echo $rows['Hari']; ?>" maxlength="100" class="limiter required" type="text">
 </div>
</div>
</li>


<li>
<div class="form_grid_12"> <label class="field_title"
id="llastname" for="lastname">Ruang<span class="req">*</span></label>
<div class="form_input">
<input id="sks" name="ruang"
value=" <?php echo $rows['Ruang']; ?>" maxlength="100" class="limiter required" type="text">
 </div>
</div>
</li>


<li>
<div class="form_grid_12"> <label class="field_title"
id="llastname" for="lastname">Jam<span class="req">*</span></label>
<div class="form_input">
<input id="sks" name="jam"
value=" <?php echo $rows['Jam']; ?>" maxlength="100" class="limiter required" type="text">
 </div>
</div>
</li>


<li>
<div class="form_grid_12"> <label class="field_title"
id="llastname" for="lastname">Dosen<span class="req">*</span></label>
<div class="form_input">
<input id="sks" name="dosen"
value=" <?php echo $rows['Dosen']; ?>" maxlength="100" class="limiter required" type="text">
 </div>
</div>
</li>

<li>
<div class="form_grid_12">
<div class="form_input"> 
<button type="submit" name="submit" value="Update Data" class="btn_small btn_blue"><span>Update</span></button>
<button type="reset"  name="reser" value="Reset Data" class="btn_small btn_blue"><span>Reset</span></button> </div>
</div>
</li>
</ul>
</form>


<?php 

	include "../config/conect.php";
if(isset($_POST['kode'])){
$id=$_GET['id'];
$Kode = $_POST['kode'];
$Matkul = $_POST['matkul'];
$SKS = $_POST['sks'];
$Semester = $_POST['semester'];
$Kelas = $_POST['kelas'];
$Hari = $_POST['hari'];
$Ruang = $_POST['ruang'];
$Jam= $_POST['jam'];
$Dosen=$_POST['dosen'];

$query = mysql_query("UPDATE jadwal SET Kode='$Kode', Matkul='$Matkul', SKS='$SKS', Semester='$Semester', Kelas='$Kelas', Hari='$Hari',Ruang='$Ruang',Jam='$Jam',Dosen='$Dosen' WHERE indeks='$id'");
			if($query){
				echo "<br>";
			echo "<script>alert('Berhasil Update Data');document.location.href='index.php?page=jadwalkuliah'</script>";
				
			}else{
				//echo "gagal";
			echo "<script>alert('Gagal Update Data ');document.location.href='index.php?page=jadwalkuliah'</script>";
				
				echo mysql_error();
			} 
		}else{
			unset($_POST['Kode']);
		}
?>

</div>
</div>
</div>
