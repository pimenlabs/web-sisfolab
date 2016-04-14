<?php	
require_once "../config/conect.php";
// get value of id that sent from address bar
$id=$_GET['indeks'];

// Retrieve data from database 
$sql="SELECT * FROM ruang WHERE indeks='$id'";
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
<div class="form_input"> <input id="kode" name="ruang"
value="<?php echo $rows['ruang']; ?>" maxlength="100"class="limiter required" type="text"> </div>
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
if(isset($_POST['ruang'])){
$id=$_GET['indeks'];
$Kode = $_POST['ruang'];

$query = mysql_query("UPDATE ruang SET ruang='$Kode' WHERE indeks='$id'");
			if($query){
				echo "<br>";
			echo "<script>alert('Berhasil Update Data');document.location.href='index.php?page=ruang'</script>";
				
			}else{
				//echo "gagal";
			echo "<script>alert('Gagal Update Data ');document.location.href='index.php?page=ruang'</script>";
				
				echo mysql_error();
			} 
		}else{
			unset($_POST['Kode']);
		}
?>

</div>
</div>
</div>
