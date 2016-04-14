<?php include "cek_session.php"; ?>
<h3>Tambah Dosen</h3>
		
		<form action="?page=dosen" method="post">
		<table width="95%">
			<tr>
			  <td width="125px"><b>Nip</b></td>
			  <td><input type="text" name="nip" class="pendek"></td>
			</tr>
			<tr>
			  <td><b>Nama Dosen</b></td>
			  <td><input type="text" name="nama" class="panjang"></td>
			</tr>
			<tr>
			  <td><b>Jenis Kelamin</b></td>
			  <td>
				<input type="radio" name="jk" id="Laki-Laki" value="Laki-Laki">Laki-Laki
				<input type="radio" name="jk" id="Perempuan" value="Perempuan">Perempuan
		  	  </td>
			</tr>
			<tr>
			  <td><b>Alamat</b></td>
			  <td><input type="text" name="alamat" class="panjang"></td>
			</tr>
			<tr>
			  <td><b>No Telepon/HP</b></td>
			  <td><input type="text" name="no_tlpn" class="sedang"></td>
			</tr>
			
			<tr><td></td><td>
			<input type="submit" class="button" value="Simpan">
			<input type="reset" class="button" value="Reset">
			</td></tr>
		</table>
		</form>
		
		<?php 
include "../conn.php";
if(isset($_POST['nip'])){
$Nip = $_POST[nip];
$Nama = $_POST[nama];
$JK = $_POST[jk];
$Alamat = $_POST[alamat];
$No_Tlpn = $_POST[no_tlpn];
$query = mysql_query("insert into dosen values ('$Nip','$Nama','$JK','$Alamat','$No_Tlpn')");
			if($query){
				//echo "<br>";
				//echo "Berhasil";
			}else{
				//echo "gagal";
				//echo mysql_error();
			} 
		}else{
			unset($_POST['nip']);
		}
?>
		
