<?php include "cek_session.php"; ?>
<?php include "../conn.php"; ?>
<h3>Jadwal Mengajar</h3>
<table border="1" class="data">
	<tr style="background-color: rgb(128,255,0); font-weight: bold; text-align:center;">
		<td class="data">Hari</td>
		<td class="data">Kode</td>
		<td class="data">Mata Kuliah</td>
		<td class="data">SKS</td>
		<td class="data">Semester</td>
		<td class="data">Kelas</td>
		<td class="data">Ruang</td>
		<td class="data">Jam</td>
	</tr>
		<?php
		$query = mysql_query("SELECT * FROM jadwal where Nip='$_SESSION[Nip]'")or die(mysql_error());
		while($data=mysql_fetch_array($query)){
		?>
		<tr>
			<td class="data" style="text-align: center;"><?php echo $data['Hari']; ?></td>
			<td class="data" style="text-align: center;"><?php echo $data['Kode']; ?></td>
			<td class="data" style="text-align: center;"><?php echo $data['Matkul']; ?></td>
			<td class="data" style="text-align: center;"><?php echo $data['SKS']; ?></td>
			<td class="data" style="text-align: center;"><?php echo $data['Semester']; ?></td>
			<td class="data" style="text-align: center;"><?php echo $data['Kelas']; ?></td>
			<td class="data" style="text-align: center;"><?php echo $data['Ruang']; ?></td>
			<td class="data" style="text-align: center;"><?php echo $data['Jam']; ?></td>
		</tr>
		<?php } ?>
</table>

<div align="center">
	<input type="button" value="CETAK" class="button" onclick="window.location='cetak_jadwal.php'" />
</div>