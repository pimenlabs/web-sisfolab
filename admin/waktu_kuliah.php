<?php include "cek_session.php"; ?>
<h3>Tambah Waktu Perkuliahan</h3>
		
		<form action="?page=waktu_kuliah" method="post">
		<table width="95%">
			<tr>
			  <td width="125px"><b>Waktu Kuliah</b></td>
			  <td><input type="text" name="jam" class="pendek"></td>
			</tr>

			<tr><td></td><td>
			<input type="submit" class="button" value="Simpan">
			<input type="reset" class="button" value="Reset">
			</td></tr>
		</table>
		</form>
		
<?php 
include "../conn.php";
if(isset($_POST['jam'])){
$Jam = $_POST[jam];
$query = mysql_query("insert into Jam values ('$Jam')");
			if($query){
				//<script>alert("Berhasil Input");document.location.href="?page=mhs"</script>
				//echo "Berhasil";
			}else{
				//echo "gagal";
				//echo mysql_error();
			} 
		}else{
			unset($_POST['jam']);
		}
?>
		
