<?php session_start();

if(isset($_SESSION['Stb'])){

	//koneksi terpusat
	include "../conn.php";
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
	$Stb=$_SESSION['Stb'];
	$name=mysql_query("SELECT Nama FROM identitas WHERE Stb='$_SESSION[Stb]'");
	$name2 = mysql_fetch_array($name);
?>

<html>
<head>
<title>SisfoAkademik Fikom</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="../mos-css/mos-style.css">

		<link rel="stylesheet" type="text/css" href="../css/demo_table_jui.css">
		<link rel="stylesheet" type="text/css" href="../css/jquery-ui-1.8.4.custom.css">

		<script type="text/javascript" language="javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" language="javascript" src="../js/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				oTable = $('#example').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
				});
			} );
		</script> <!--pemanggilan file css-->
</head>

<body id="dt_example">
<div id="header">
	<div class="inHeader">
		<div class="mosAdmin">
		Selamat Datang, <?=$name2['Nama'];?><br>
		<a href="../logout.php">Keluar</a>
		</div>
	<div class="clear"></div>
	</div>
</div>

<div id="wrapper2">
	<div class="quoteOfDay">
	<b>Syarat belanja Kartu Rencana Studi :</b><br>
	<i style="color: #5b5b5b;">"1. Telah membayar uang kuliah semester akhir tahun ajaran 2012/2013"</i><br>
	<i style="color: #5b5b5b;">"2. Telah melakukan konsultasi dengan penasehat akademik"</i>
	</div>
	<div class="clear"></div>
	<div class="shortcutHome">
	<a href="home.php"><img src="../mos-css/img/photo.png"><br>Kembali ke Beranda</a>
	</div>
	<div class="clear"></div>
	<center><h2>Input Kartu Rencana Studi</h2></center>
<?php
$Stb = $_POST['Stb'];
$sqlmhs = mysql_query("SELECT * FROM identitas WHERE Stb='$Stb'");
$mhs = mysql_fetch_array($sqlmhs);

//melakukan query ke database
$sqlmatkul = mysql_query("SELECT * FROM jadwal");
while($k = mysql_fetch_array($sqlmatkul)){
$indeks[] =$k['indeks'];
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
echo "var jumlah = ".count($indeks).";\n";
echo "var SKS = new Array();\n";
//mengambil SKS matakuliah dan memasukkan ke array javascript
for($j=0; $j<count($indeks); $j++){
echo "SKS['".$indeks[$j]."'] = ".$SKS[$j].";\n";
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
td10 = "11"+i;
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
document.getElementById(td10).style.backgroundColor = "lightgreen";
}else {
document.getElementById(td1).style.backgroundColor = "white";
document.getElementById(td2).style.backgroundColor = "white";
document.getElementById(td3).style.backgroundColor = "white";
document.getElementById(td4).style.backgroundColor = "white";
document.getElementById(td5).style.backgroundColor = "white";
document.getElementById(td6).style.backgroundColor = "white";
document.getElementById(td7).style.backgroundColor = "white";
document.getElementById(td8).style.backgroundColor = "white";
document.getElementById(td9).style.backgroundColor = "white";
document.getElementById(td10).style.backgroundColor = "white";
}
}
//menampilkan total jumlah SKS yang diambil
document.getElementById("jsks").value = jum;
}
</script>
<form name="inputkrs" method="post" action="home.php">
<input type="hidden" name="Stb" value="<?=$mhs['Stb'];?>">
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
<thead>
<tr>
<td align="center">Kode</th>
<td align="center">Mata Kuliah</th>
<td align="center">SKS</th>
<td align="center">Semester</th>
<td align="center">Kelas</th>
<td align="center">Hari</th>
<td align="center">Ruang</th>
<td align="center">Jam</th>
<td align="center">B/U</th>
<td align="center">Dosen</th>
<td align="center">Ambil</th>
</tr>
</thead>
<tbody>
<?php
//menampilkan matakuliah ke dalam tabel
for($i=0; $i<count($indeks); $i++){
?>
<tr class="gradeA">
<td id="k1<?=$i;?>" align="center"><?=$Kode[$i];?></td>
<td id="k2<?=$i;?>"><?=$Matkul[$i];?></td>
<td id="k3<?=$i;?>" align="center"><?=$SKS[$i];?></td>
<td id="k4<?=$i;?>" align="center"><?=$Semester[$i];?></td>
<td id="k5<?=$i;?>" align="center"><?=$Kelas[$i];?></td>
<td id="k6<?=$i;?>" align="center"><?=$Hari[$i];?></td>
<td id="k7<?=$i;?>" align="center"><?=$Ruang[$i];?></td>
<td id="k8<?=$i;?>" align="center"><?=$Jam[$i];?></td>
<td id="11<?=$i;?>" align="center"><select name="ambil"><option value='B'>Baru</option><option value='U'>Ulang</option> </select>
<td id="k9<?=$i;?>"><?=$Dosen[$i];?></td>
<td id="10<?=$i;?>" align="center"><input type="checkbox" name="mk[]" onclick="hitungtotal()" value="<?=$indeks[$i];?>" id="mk<?=$i;?>"></td>
</tr>
<?php
}
?>
</tbody>
<tfoot>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td colspan="2" align="right"><input type="submit" value="PROSES" onclick="return confirm('Apakah anda yakin?')" style="cursor:pointer;" class="button"></td>
</tr>
</tfoot>
</table>
</form>
<div class="clear"></div>
<div id="footer">
	&copy; 2013 Sistem Informasi Akademik | <a href="../www.fikom.umi.ac.id">Fakultas Ilmu Komputer </a>|<br>
	<a href="../www.umi.ac.id">Universitas Muslim Indonesia</a></div>
</div>
</body>
</html>

<?php
}else{
	session_destroy();
	header('Location:../index.php?status=Silahkan Login');
}
?>	


<?php
include "../conn.php";
$Stb=$_SESSION['Stb'];
$mk = $_POST['mk'];

foreach($mk as $value){
$input = mysql_query("INSERT INTO inputkrs (Stb, indeks) VALUES('$Stb', '$value')");
}
?>