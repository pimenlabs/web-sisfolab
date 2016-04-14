<?php include "cek_session.php"; ?>
<h3>Tambah Mahasiswa</h3>
		<form action="?page=mhs" method="post">
		<table width="95%">
			<tr>
			  <td width="125px"><b>Stambuk</b></td>
			  <td><input type="text" name="stb" value="130" class="pendek" disabled="disabled"/></td>
			</tr>
			<tr>
			  <td><b>Nama Mahasiswa</b></td>
			  <td><input type="text" name="nama" class="panjang" readonly="readonly" ></td>
			</tr>
			<tr>
			  <td><b>Tempat, Tgl.Lahir</b></td>
			  <td><input type="text" name="ttl" class="sedang"></td>
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
			  <td><b>Agama</b></td>
			  <td>
				<select name="agama">
  					<option value="Islam">Islam</option>
  					<option value="Hindu">Hindu</option>
  					<option value="Kristen Protestan">Kristen Protestan</option>
  					<option value="Kristen Katolik">Kristen Katolik</option>
  					<option value="Buddha">Buddha</option>
				</select>
			</td>
			</tr>
			<tr>
			  <td><b>No Telepon/HP</b></td>
			  <td><input type="text" name="no_tlpn" class="sedang"></td>
			</tr>
			<tr>
			  <td><b>Asal Sekolah</b></td>
			  <td><input type="text" name="asal" class="sedang"></td>
			</tr>
			<tr>
			  <td><b>Jurusan</b></td>
			  <td>
				<select name="jurusan">
  					<option value="Teknik Informatika">Teknik Informatika</option>
				</select>
			</td>
			</tr>
			<tr>
			  <td><b>Angkatan</b></td>
			  <td><input type="text" name="angkatan" class="sedang"></td>
			</tr>
			<tr>
			<td><b>Penasehat Akademik</b></td>
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
		
<?php 
include "../conn.php";
if(isset($_POST['stb'])){
$Stb = $_POST[stb];
$Nama = $_POST[nama];
$TTL = $_POST[ttl];
$JK = $_POST[jk];
$Alamat = $_POST[alamat];
$Agama = $_POST[agama];
$No_Tlpn = $_POST[no_tlpn];
$Asal_Sklh = $_POST[asal];
$Jurusan = $_POST[jurusan];
$Angkatan = $_POST[angkatan];
$Dosen = $_POST[dosen];
$query = mysql_query("insert into identitas values ('$Stb','$Nama','$Alamat','$TTL','$Agama','$No_Tlpn','$Asal_Sklh','$Jurusan','$Angkatan','$JK','$Dosen')");
			if($query){
				//<script>alert("Berhasil Input");document.location.href="?page=mhs"</script>
				//echo "Berhasil";
			}else{
				//echo "gagal";
				//echo mysql_error();
			} 
		}else{
			unset($_POST['stb']);
		}
?>
		
