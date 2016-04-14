<?php
include "../conn.php";
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
function bobot($data){
	if($data=='A'){ $bobot = 4; }
	else if($data=='B'){$bobot = 3;}
	else if($data=='C') { $bobot = 2; }
	else if($data=='E') { $bobot = 0; }
	else { $bobot = 0; }
	
	return $bobot;
}
?>
<h3>Tabulasi Nilai</h3>
<table border="1" class="data">
	<tr style="background-color: rgb(128,255,0); font-weight: bold; text-align:center;">
		<td class="data">No.</td>
		<td class="data">Kode</td>
		<td class="data">Mata Kuliah</td>
		<td class="data">SKS</td>
		<td class="data">Nilai</td>
		<td class="data">Bobot</td>
		<td class="data">NxB</td>
	</tr>
	<?php
		
		$query = mysql_query("select * from inputkrs a , jadwal b where a.indeks = b.indeks and a.Stb='$_SESSION[Stb]'")or die(mysql_error());
		$summary = 0;
		$sumSks = 0;
		$no = 1;
		while($data=mysql_fetch_array($query)){
	?>
		<tr>
			<td class="data" style="text-align: center;"><?php echo $no; ?></td>
			<td class="data" style="text-align: center;"><?php echo $data['Kode']; ?></td>
			<td class="data"><?php echo $data['Matkul']; ?></td>
			<td class="data" style="text-align: center;">
			<?php 
			echo $data['SKS'];
			$sumSks += $data['SKS'];
			?>
			</td>
			<td class="data" style="text-align: center;"><?php echo $data['Nilai']; ?></td>
			<td class="data" style="text-align: center;"><?php echo bobot($data['Nilai']); ?></td>
			<td class="data" style="text-align: center;">
			<?php 
			echo $sumTemp = $data['SKS'] * bobot($data['Nilai']); 
			$summary += $sumTemp;
			?>
			</td>
			
		</tr>
	<?php
		$no++;
		}
	?>
	<tr>
		<td colspan="7" class="data" style="font-weight: bold;">
			Total yang di belanja : <span style="margin:0 3px;"><?php echo $sumSks; ?></span>
			<br>
			IPK Semester Kini : <span style="margin:0 3px;"><?php echo $ipk=round($summary/$sumSks,2); ?></span><br>
		</td>
	</tr>
</table>
<div align="center">
	<input type="button" value="CETAK" class="button" onclick="window.location='cetak_tabulasi.php'" />
</div>