
<div class='grid_12'>
<div class='widget_wrap'>
<div class='widget_top'> <span class='h_icon blocks_images'></span>
<h6>Setting Jadwal Mata Kuliah<br></h6>
</div><div class='widget_content'>

<div class="widget_content" >
<form action="index.php?page=penjadwalan" method="post" id="form103"
class="form_container left_label valid_tip" >
<ul>

<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Kode<span class="req">*</span></label>
<div class="form_input"> 
			<?php
			include "../conn.php";   
			$result = mysql_query("select * from matkul order by Kode");    
			$jsArray = "var MatkulArray = new Array();\n";    
			echo '<select name="kode" onchange="changeValue(this.value)">';    
			echo '<option>-------</option>';    
			while ($row = mysql_fetch_array($result)) {    
			echo '<option value="' . $row['Kode'] . '">' . $row['Kode'] . '</option>';    
	        $jsArray .= "MatkulArray['" . $row['Kode'] . "'] = {nama_matkul:'" . addslashes($row['Matkul']) . "',jmlh_sks:'".addslashes($row['SKS'])."',smstr:'" . addslashes($row['Semester']) . "'};\n";   
			}    
echo '</select>';   
			?>
			</select>
								</div>
</div>

</li>
<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Nama Mata Kuliah<span class="req">*</span></label>
<div class="form_input"> <input type="text" id="hasil_matkul" name="matkul" value="" maxlength="50" class="limiter required" > </div>
</div>
</li>


<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Jumlah SKS<span class="req">*</span></label>
<div class="form_input"> <input type="text" id="hasil_sks" name="sks" value="" maxlength="50" class="limiter required" > </div>
</div>
</li>


<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Semester<span class="req">*</span></label>
<div class="form_input"> <input id="hasil_semester" name="semester" value="" maxlength="50" class="limiter required" type="text"> </div>
</div>
</li>


<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Kelas<span class="req">*</span></label>
<div class="form_input"> 
<select name="kelas">
			<?php
			include "../config/conect.php";
			$query = "SELECT * FROM kelas";
			$hasil = mysql_query($query);
			echo '<option>-------</option>';    
			while ($data = mysql_fetch_array($hasil))
			{
				
			echo "<option value='".$data['kelas']."'>".$data['kelas']."</option>";
			}
			?>
			</select>

 </div>
</div>
</li>


<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Hari<span class="req">*</span></label>
<div class="form_input"> 
				<select name="hari"><option>-------</option>	    
  					<option value="Senin">Senin</option>
  					<option value="Selasa">Selasa</option>
					<option value="Rabu">Rabu</option>
  					<option value="Kamis">Kamis</option>
					<option value="Jumat">Jumat</option>
  					<option value="Sabtu">Sabtu</option>
				</select>
	 </div>
</div>
</li>


<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Ruang<span class="req">*</span></label>
<div class="form_input">
 <select name="ruang">
			<?php
			include "../conn.php";
			$query = "SELECT * FROM ruang";
			$hasil = mysql_query($query);
			echo '<option>-------</option>';    
			while ($data = mysql_fetch_array($hasil))
			{
			echo "<option value='".$data['ruang']."'>".$data['ruang']."</option>";
			}
			?>
			</select>
	 </div>
</div>
</li>

<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Jam<span class="req">*</span></label>
<div class="form_input">
				<select name="jam"><option>-------</option>	
					<option value="07.30 - 10.00">07.30 - 10.00</option>
					<option value="10.00 - 12.30">10.00 - 12.30</option>
					<option value="13.00 - 14.40">13.00 - 14.40</option>
					<option value="14.40 - 16.20">14.40 - 16.20</option>
				</select>

 </div>
</div>
</li>

<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Dosen<span class="req">*</span></label>
<select name="dosen">
			<?php
			include "../conn.php";
			$query = "SELECT * FROM dosen order by Nama";
			$hasil = mysql_query($query);
			echo '<option>-------</option>';    
			while ($data = mysql_fetch_array($hasil))
			{
			echo "<option value='".$data['Nama']."'>".$data['Nama']."</option>";
			}
			?>
			</select>
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

</div>
</div>
</div>

		<script type="text/javascript">    
		<?php echo $jsArray; ?>  
		function changeValue(id){  
		document.getElementById('hasil_matkul').value = MatkulArray[id].nama_matkul;  
		document.getElementById('hasil_sks').value = MatkulArray[id].jmlh_sks;  
		document.getElementById('hasil_semester').value = MatkulArray[id].smstr; 
		};  
		</script> 
<?php 
include "../config/conect.php";
if(isset($_POST['kode'])){
$Kode = $_POST[kode];
$Matkul = $_POST[matkul];
$SKS = $_POST[sks];
$Semester = $_POST[semester];
$Kelas = $_POST[kelas];
$Hari = $_POST[hari];
$Ruang = $_POST[ruang];
$Jam = $_POST[jam];
$Dosen = $_POST[dosen];
$query = mysql_query("insert into jadwal values ('','$Kode','$Matkul','$SKS','$Semester','$Kelas','$Hari','$Ruang','$Jam','$Dosen')");
			if($query){
				//echo "<br>";
				//echo "Berhasil";
			}else{
				//echo "gagal";
				//echo mysql_error();
			} 
		}else{
			unset($_POST['kode']);
		}
?>
