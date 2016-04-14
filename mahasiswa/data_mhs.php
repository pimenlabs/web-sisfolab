<?php include "cek_session.php"; ?>
<?php include "../conn.php"; ?>
<h3>Data Mahasiswa</h3>
		<?php
		$query = mysql_query("select * from identitas where Stb='$_SESSION[Stb]'")or die(mysql_error());
		while($data=mysql_fetch_array($query)){
		?>
<table border="1" class="data2">
	<tr>
	<th style="background-color: rgb(128,255,0); font-weight: bold; text-align:left;">Stambuk</th>
	<td class="data" style="text-align: left;"><?php echo $data['Stb']; ?></td>
	</tr>
	<tr>
	<th style="background-color: rgb(128,255,0); font-weight: bold; text-align:left;">Nama Mahasiswa</th>
	<td class="data" style="text-align: left;"><?php echo $data['Nama']; ?></td>
	</tr>
	<tr>
	<th style="background-color: rgb(128,255,0); font-weight: bold; text-align:left;">Alamat</th>
	<td class="data" style="text-align: left;"><?php echo $data['Alamat']; ?></td>
	</tr>
	<tr>
	<th style="background-color: rgb(128,255,0); font-weight: bold; text-align:left;">Tempat, Tgl.Lahir</th>
	<td class="data" style="text-align: left;"><?php echo $data['TTL']; ?></td>
	</tr>
	<tr>
	<th style="background-color: rgb(128,255,0); font-weight: bold; text-align:left;">Jenis Kelamin</th>
	<td class="data" style="text-align: left;"><?php echo $data['JK']; ?></td>
	</tr>
	<tr>
	<th style="background-color: rgb(128,255,0); font-weight: bold; text-align:left;">Agama</th>
	<td class="data" style="text-align: left;"><?php echo $data['Agama']; ?></td>
	</tr>
	<tr>
	<th style="background-color: rgb(128,255,0); font-weight: bold; text-align:left;">No Telepon/HP</th>
	<td class="data" style="text-align: left;"><?php echo $data['No_Tlpn']; ?></td>
	</tr>
	<tr>
	<th style="background-color: rgb(128,255,0); font-weight: bold; text-align:left;">Asal Sekolah</th>
	<td class="data" style="text-align: left;"><?php echo $data['Asal_Sklh']; ?></td>
	</tr>
	<tr>
	<th style="background-color: rgb(128,255,0); font-weight: bold; text-align:left;">Jurusan</th>
	<td class="data" style="text-align: left;"><?php echo $data['Jurusan']; ?></td>
	</tr>
	<tr>
	<th style="background-color: rgb(128,255,0); font-weight: bold; text-align:left;">Angkatan</th>
	<td class="data" style="text-align: left;"><?php echo $data['Angkatan']; ?></td>
	</tr>
	<tr>
	<th style="background-color: rgb(128,255,0); font-weight: bold; text-align:left;">Penasehat Akademik</th>
	<td class="data" style="text-align: left;"><?php echo $data['PA']; ?></td>
	</tr>

		<?php } ?>
</table>