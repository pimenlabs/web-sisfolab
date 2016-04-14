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

function belanja($ipk){
	if($ipk>=round(0.1,1) && $ipk<=round(2.0,1)){
		echo "SKS Yang dapat di belanjakan : 12"; }
	else if($ipk>=round(2.1,1)&&$ipk<=round(2.5,1)){
		echo "SKS Yang dapat di belanjakan : 17 "; }
	else if($ipk>=round(2.6,1)&&$ipk<=round(3.0,1)){
		echo "SKS Yang dapat di belanjakan : 20 "; }
	else if($ipk>=round(3.1,1)&&$ipk<=round(4.0,1)){
		echo "SKS Yang dapat di belanjakan : 24 "; }	
	else { echo "SKS Yang dapat di belanjakan : 0";
	}
}
?>
				<h3>Kartu Hasil Studi</h3>
				<form action="?page=khs" method="post">
				<table cellspacing="7">
				<tr>
				<th style="font-weight: bold; font-size:14; color:black;"><b>Pilih Semester :</b></th>
				<th>
				<select name="semester">
					<option value="#">----------------</option>
  					<option value="1">Semester 1</option>
  					<option value="2">Semester 2</option>
					<option value="3">Semester 3</option>
					<option value="4">Semester 4</option>
					<option value="5">Semester 5</option>
					<option value="6">Semester 6</option>
					<option value="7">Semester 7</option>
					<option value="8">Semester 8</option>
				</select>
				</th>
				</tr>
				<tr>
				<th colspan='2'>
				<input type="submit" class="button" value="PROSES">
				<th>
				</tr>
				</table>
				</form>
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
		
		$Semester = $_POST[semester];
		$query = mysql_query("select * from inputkrs a , jadwal b where a.indeks = b.indeks and a.Stb='$_SESSION[Stb]' and b.Semester='$Semester'")or die(mysql_error());
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
			<?php belanja($ipk); ?>
		</td>
	</tr>

</table>
<form action="cetak_khs.php?id=<?php echo"$Semester";?>" method="post">
<div align="center">
	<input type="submit" value="CETAK" class="button">
</div>
</form>