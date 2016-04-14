<?php session_start();

if(isset($_SESSION['Stb'])){

	//koneksi terpusat
	include "../conn.php";
	$Stb=$_SESSION['Stb'];
	$Nama=mysql_query("SELECT Nama FROM identitas WHERE Stb='$_SESSION[Stb]'");
	$mhs = mysql_fetch_array($Nama);
?>

<html>
<head>
<title>SisfoAkademik Fikom</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../mos-css/mos-style.css"> <!--pemanggilan file css-->
</head>

<body>
<div id="header">
	<div class="inHeader">
		<div class="mosAdmin">
		Selamat Datang, <?=$mhs['Nama'];?><br>
		<a href="../logout.php">Keluar</a>
		</div>
	<div class="clear"></div>
	</div>
</div>

<div id="wrapper">
	<div id="leftBar">
	<?php include "menu.php";?>
	</div>
	<div id="rightContent">
<?php include "isi.php";?>
	</div>
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