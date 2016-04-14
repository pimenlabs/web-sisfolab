<?php include "cek_session.php"; ?>
<?php include "../conn.php"; ?>
<head>
	<link rel="stylesheet" type="text/css" href="../mos-css/mos-style.css">
	<style type="text/css">
	<!--
	body {
	margin-left: 15%;
	margin-right: 15%;
	}
	-->
	</style>
</head>
<body onload="window.print()">
<table>
	<tr>
		<td style="font-weight: bold;">
			<br>
			UNIVERSITAS MUSLIM INDONESIA 
			<br>
			FAKULTAS ILMU KOMPUTER <br>
		</td>
	</tr>
</table>
	<br>
		<?php
		$query = mysql_query("select * from identitas where Stb='$_SESSION[Stb]'")or die(mysql_error());
		while($data=mysql_fetch_array($query)){
		?>
	<table border="0" cellpadding="0" cellspacing="0">
	<tr>
	<th style="text-align:left;">Stambuk</th>
	<td>:</td>
	<td style="text-align: left;"><?php echo $data['Stb']; ?></td>
	</tr>
	
	<tr>
	<th style="text-align:left;">Nama Mahasiswa</th>
	<td>:</td>
	<td style="text-align: left;"><?php echo $data['Nama']; ?></td>
	</tr>

	<tr>
	<th style="text-align:left;">Jenis Kelamin</th>
	<td>:</td>
	<td style="text-align: left;"><?php echo $data['JK']; ?></td>
	</tr>
	
	<tr>
	<th style="text-align:left;">Program Studi</th>
	<td>:</td>
	<td style="text-align: left;"><?php echo $data['Jurusan']; ?></td>
	</tr>
		<?php } ?>
</table>
<h2>JADWAL PERKULIAHAN</h2>
<table border="1" class="data">
	<tr style="font-weight: bold; text-align:center;">
		<td class="data">Hari</td>
		<td class="data">Kode</td>
		<td class="data">Mata Kuliah</td>
		<td class="data">SKS</td>
		<td class="data">Semester</td>
		<td class="data">Kelas</td>
		<td class="data">Ruang</td>
		<td class="data">Jam</td>
		<td class="data">Dosen</td>
	</tr>
		<?php
		$query = mysql_query("SELECT * FROM jadwal a,inputkrs b where a.indeks=b.indeks and b.Stb='$_SESSION[Stb]'")or die(mysql_error());
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
			<td class="data" style="text-align: center;"><?php echo $data['Dosen']; ?></td>
		</tr>
		<?php } ?>
</table>

</body>