<?php include "cek_session.php"; ?>
<h3>Tambah Kelas</h3>
		
		<form action="?page=kelas" method="post">
		<table width="95%">
			<tr>
			  <td width="125px"><b>Kelas</b></td>
			  <td><input type="text" name="kelas" class="pendek"></td>
			</tr>

			<tr><td></td><td>
			<input type="submit" class="button" value="Simpan">
			<input type="reset" class="button" value="Reset">
			</td></tr>
		</table>
		</form>
		
<?php 
include "../conn.php";
if(isset($_POST['kelas'])){
$Kelas = $_POST[kelas];
$query = mysql_query("insert into kelas values ('$Kelas')");
			if($query){
				//<script>alert("Berhasil Input");document.location.href="?page=mhs"</script>
				//echo "Berhasil";
			}else{
				//echo "gagal";
				//echo mysql_error();
			} 
		}else{
			unset($_POST['kelas']);
		}
?>
		
