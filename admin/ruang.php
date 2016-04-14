<?php include "cek_session.php"; ?>
<h3>Tambah Ruang</h3>
		
		<form action="?page=ruang" method="post">
		<table width="95%">
			<tr>
			  <td width="125px"><b>Ruang</b></td>
			  <td><input type="text" name="ruang" class="pendek"></td>
			</tr>

			<tr><td></td><td>
			<input type="submit" class="button" value="Simpan">
			<input type="reset" class="button" value="Reset">
			</td></tr>
		</table>
		</form>
		
<?php 
include "../conn.php";
if(isset($_POST['ruang'])){
$Ruang = $_POST[ruang];
$query = mysql_query("insert into ruang values ('$Ruang')");
			if($query){
				//<script>alert("Berhasil Input");document.location.href="?page=mhs"</script>
				//echo "Berhasil";
			}else{
				//echo "gagal";
				//echo mysql_error();
			} 
		}else{
			unset($_POST['ruang']);
		}
?>
		
