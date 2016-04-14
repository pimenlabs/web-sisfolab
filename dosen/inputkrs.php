<h3>Input Kartu Rencana Studi</h3>
<?php
$Stb = $_POST['Stb'];
$sqlmhs = mysql_query("SELECT * FROM identitas WHERE Stb='$Stb'");
$mhs = mysql_fetch_array($sqlmhs);

//melakukan query ke database
$sqlmatkul = mysql_query("SELECT * FROM jadwal");
while($k = mysql_fetch_array($sqlmatkul)){
$Kode[] = $k['Kode'];
$Matkul[] = $k['Matkul'];
$SKS[] = $k['SKS'];
$Semester[] = $k['Semester'];
$Kelas[] = $k['Kelas'];
$Hari[] = $k['Hari'];
$Ruang[] = $k['Ruang'];
$Jam[] = $k['Jam'];
$Dosen[] = $k['Dosen'];
}
?>
<script>
<?php
echo "var jumlah = ".count($Kode).";\n";
echo "var SKS = new Array();\n";
//mengambil SKS matakuliah dan memasukkan ke array javascript
for($j=0; $j<count($Kode); $j++){
echo "SKS['".$Kode[$j]."'] = ".$SKS[$j].";\n";
}
?>
function hitungtotal(){
jum = 0;
for(i=0;i<jumlah;i++){
id = "mk"+i;
td1 = "k1"+i;
td2 = "k2"+i;
td3 = "k3"+i;
td4 = "k4"+i;
td5 = "k5"+i;
td6 = "k6"+i;
td7 = "k7"+i;
td8 = "k8"+i;
td9 = "k9"+i;
if(document.getElementById(id).checked){
Kode = document.getElementById(id).value
jum = jum + SKS[Kode];
//untuk mengubah warna latar tabel apabila diceklist
document.getElementById(td1).style.backgroundColor = "lightgreen";
document.getElementById(td2).style.backgroundColor = "lightgreen";
document.getElementById(td3).style.backgroundColor = "lightgreen";
document.getElementById(td4).style.backgroundColor = "lightgreen";
document.getElementById(td5).style.backgroundColor = "lightgreen";
document.getElementById(td6).style.backgroundColor = "lightgreen";
document.getElementById(td7).style.backgroundColor = "lightgreen";
document.getElementById(td8).style.backgroundColor = "lightgreen";
document.getElementById(td9).style.backgroundColor = "lightgreen";
}else {
document.getElementById(td1).style.backgroundColor = "red";
document.getElementById(td2).style.backgroundColor = "white";
document.getElementById(td3).style.backgroundColor = "white";
document.getElementById(td4).style.backgroundColor = "white";
document.getElementById(td5).style.backgroundColor = "white";
document.getElementById(td6).style.backgroundColor = "white";
document.getElementById(td7).style.backgroundColor = "white";
document.getElementById(td8).style.backgroundColor = "white";
document.getElementById(td9).style.backgroundColor = "white";
}
}
//menampilkan total jumlah SKS yang diambil
document.getElementById("jsks").value = jum;
}
</script>



<div id="table">
<form name="inputkrs" method="post" action="outputkrs.php">
<input type="hidden" name="Stb" value="<?=$mhs['Stb'];?>">
<table border="1" width="730" cellpadding="1" cellspacing="1" >
<tr align="center" style="background:#feffdc">
<th height="25" width="60">Kode</th>
<th>Mata Kuliah</th>
<th>SKS</th>
<th>Semester</th>
<th>Kelas</th>
<th>Hari</th>
<th>Ruang</th>
<th>Jam</th>
<th>Dosen</th>
<th>Ambil</th>
</tr>
<?php
//menampilkan matakuliah ke dalam tabel
for($i=0; $i<count($Kode); $i++){
?>
<tr>
<td id="k1<?=$i;?>" align="center"><?=$Kode[$i];?></td>
<td id="k2<?=$i;?>"><?=$Matkul[$i];?></td>
<td id="k3<?=$i;?>" align="center"><?=$SKS[$i];?></td>
<td id="k4<?=$i;?>" align="center"><?=$Semester[$i];?></td>
<td id="k5<?=$i;?>"><?=$Kelas[$i];?></td>
<td id="k6<?=$i;?>"><?=$Hari[$i];?></td>
<td id="k7<?=$i;?>"><?=$Ruang[$i];?></td>
<td id="k8<?=$i;?>" align="center"><?=$Jam[$i];?></td>
<td id="k9<?=$i;?>"><?=$Dosen[$i];?></td>
<td id="10<?=$i;?>" align="center"><input type="checkbox" name="mk[]" onclick="hitungtotal()" value="<?=$Kode[$i];?>" id="mk<?=$i;?>">
</tr>
<?php
}
?>
<tr>
<td colspan="2"><b>JUMLAH YANG DIAMBIL</b></td>
<td align="center"><input type="text" name="totalsks" size="2" maxlength="2" id="jsks" readonly="readonly" style="text-align:center; color:red;"></td>
</tr>
<tr><td colspan="4" align="center"><input type="submit" value="Proses" style="cursor:pointer;" class="button"></td></tr>
</table>
</form>
</div>
<div class="clear"></div>