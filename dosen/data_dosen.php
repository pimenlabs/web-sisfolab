<?php include "cek_session.php"; ?>
<?php include "../conn.php"; ?>
<h3>Data Dosen</h3>
		<?php
		$query = mysql_query("select * from dosen where Nip='$_SESSION[Nip]'")or die(mysql_error());
		while($data=mysql_fetch_array($query)){
		?>
<table border="1" class="data3">
	<tr>
	<th style="background-color: rgb(128,255,0); font-weight: bold; text-align:left;">NIP</th>
	<td class="data" style="text-align: left;"><?php echo $data['Nip']; ?></td>
	</tr>
	<tr>
	<th style="background-color: rgb(128,255,0); font-weight: bold; text-align:left;">Nama Dosen</th>
	<td class="data" style="text-align: left;"><?php echo $data['Nama']; ?></td>
	</tr>
	<tr>
	<th style="background-color: rgb(128,255,0); font-weight: bold; text-align:left;">Alamat</th>
	<td class="data" style="text-align: left;"><?php echo $data['Alamat']; ?></td>
	</tr>
	<tr>
	<th style="background-color: rgb(128,255,0); font-weight: bold; text-align:left;">Jenis Kelamin</th>
	<td class="data" style="text-align: left;"><?php echo $data['JK']; ?></td>
	</tr>
	<tr>
	<th style="background-color: rgb(128,255,0); font-weight: bold; text-align:left;">No Telepon/HP</th>
	<td class="data" style="text-align: left;"><?php echo $data['No_Tlpn']; ?></td>
	</tr>
	<tr>
	<th style="background-color: rgb(128,255,0); font-weight: bold; text-align:left;">History</th>
	<td class="data" style="text-align: left;"><?php echo $data['History']; ?></td>
	</tr>

		<?php } ?>
</table>