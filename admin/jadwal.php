<?php include "cek_session.php"; ?>
 
<h3>Tambah Jadwal Kuliah</h3>
		
		<form action="?page=jadwal" method="post">
		<table width="95%">
			<tr>
			<td width="125px"><b>Kode</b></td>
			<td>
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
			</select></td>
			</tr>
			<tr>
			  <td><b>Mata Kuliah</b></td>
			  <td><input type="text" name="matkul" id="hasil_matkul" class="panjang"/></td>
			</tr>
			<tr>
			  <td><b>SKS</b></td>
			  <td><input type="text" name="sks" id="hasil_sks" class="pendek"></td>
			</tr>
			<tr>
			  <td><b>Semester</b></td>
			  <td><input type="text" name="semester" id="hasil_semester" class="pendek"></td>
			</tr>
			<tr>
			<td><b>Kelas</b></td>
			<td><select name="kelas">
			<?php
			include "../conn.php";
			$query = "SELECT * FROM kelas";
			$hasil = mysql_query($query);
			while ($data = mysql_fetch_array($hasil))
			{
			echo "<option value='".$data['kelas']."'>".$data['kelas']."</option>";
			}
			?>
			</select></td>
			</tr>
			<tr>
			  <td><b>Hari</b></td>
			  <td>
				<select name="hari">
  					<option value="Senin">Senin</option>
  					<option value="Selasa">Selasa</option>
					<option value="Rabu">Rabu</option>
  					<option value="Kamis">Kamis</option>
					<option value="Jumat">Jumat</option>
  					<option value="Sabtu">Sabtu</option>
				</select>
			</td>
			</tr>
			<tr>
			<td><b>Ruang</b></td>
			<td><select name="ruang">
			<?php
			include "../conn.php";
			$query = "SELECT * FROM ruang";
			$hasil = mysql_query($query);
			while ($data = mysql_fetch_array($hasil))
			{
			echo "<option value='".$data['ruang']."'>".$data['ruang']."</option>";
			}
			?>
			</select></td>
			</tr>
			<tr>
			<td><b>Waktu</b></td>
			<td><select name="jam">
			<?php
			include "../conn.php";
			$query = "SELECT * FROM jam";
			$hasil = mysql_query($query);
			while ($data = mysql_fetch_array($hasil))
			{
			echo "<option value='".$data['Jam']."'>".$data['Jam']."</option>";
			}
			?>
			</select></td>
			</tr>
			<tr>
			<td><b>Dosen</b></td>
			<td><select name="dosen">
			<?php
			include "../conn.php";
			$query = "SELECT * FROM dosen order by Nama";
			$hasil = mysql_query($query);
			while ($data = mysql_fetch_array($hasil))
			{
			echo "<option value='".$data['Nama']."'>".$data['Nama']."</option>";
			}
			?>
			</select></td>
			</tr>
			
			
			<tr><td></td><td>
			<input type="submit" class="button" value="Simpan">
			<input type="reset" class="button" value="Reset">
			</td></tr>
		</table>
		</form>

		<script type="text/javascript">    
		<?php echo $jsArray; ?>  
		function changeValue(id){  
		document.getElementById('hasil_matkul').value = MatkulArray[id].nama_matkul;  
		document.getElementById('hasil_sks').value = MatkulArray[id].jmlh_sks;  
		document.getElementById('hasil_semester').value = MatkulArray[id].smstr; 
		};  
		</script> 
		
<?php 
include "../conn.php";
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