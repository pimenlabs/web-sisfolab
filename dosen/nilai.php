<?php
		include "cek_session.php";   				
		?>

<h3>Penginputan Nilai Mahasiswa</h3>
<table border="1" class="data3">
	<tr style="background-color: rgb(128,255,0); font-weight: bold; text-align:center;">
		<td class="data">Mata Kuliah</td>
		<td class="data">Kelas</td>
		<td class="data">Proses</td>
	</tr>
		<?php
		$query = mysql_query("SELECT * FROM jadwal where Nip='$_SESSION[Nip]'")or die(mysql_error());
		while($row = mysql_fetch_array($query)){
		?>
		<tr>
			<td class="data" style="text-align: center;"><?php echo $row['Matkul']; ?></td>
			<td class="data" style="text-align: center;"><?php echo $row['Kelas']; ?></td>
			<td class="data" style="text-align: center;"><?php echo "<a href=?page=nilaiupdate&id=$row[indeks]>Update</a>"; ?> 
		</tr>
		<?php } ?>
</table>