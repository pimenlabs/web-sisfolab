<?php include "cek_session.php"; ?>

<h3>Tambah Mata Kuliah</h3>
		
		<form action="?page=matkul" method="post">
		<table width="95%">
			<tr>
			  <td width="125px"><b>Kode</b></td>
			  <td><input type="text" name="kode" class="pendek"></td>
			</tr>
			<tr>
			  <td><b>Mata Kuliah</b></td>
			  <td><input type="text" name="matkul" class="panjang"></td>
			</tr>
			<tr>
			  <td><b>SKS</b></td>
			  <td><input type="text" name="sks" class="pendek"></td>
			</tr>
			<tr>
			  <td><b>Semester</b></td>
			  <td><input type="text" name="semester" class="pendek"></td>
			</tr>
			
			<tr><td></td><td>
			<input type="submit" class="button" value="Simpan">
			<input type="reset" class="button" value="Reset">
			</td></tr>
		</table>
		</form>
<?php 
include "../conn.php";
if(isset($_POST['kode'])){
$Kode = $_POST[kode];
$Matkul = $_POST[matkul];
$SKS = $_POST[sks];
$Semester = $_POST[semester];
$query = mysql_query("insert into matkul values ('$Kode','$Matkul','$SKS','$Semester')",$koneksi);
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