<?php session_start();

include "conn.php";

if (isset($_POST['login'])){
	//koneksi terpusat

	$username=$_POST['username'];
	$Stb=$_POST['username'];
	$Stb2=$_POST['password'];
	$password=($_POST['password']);
	$Nip=$_POST['username'];
	$domain=$_POST['domain'];
	
	if($domain=="admin"){
		$query=mysql_query("select * from admin where username='$username' and password='$password'");
		$cek=mysql_num_rows($query);
		$row=mysql_fetch_array($query);
		
		if($cek){
			$_SESSION['username']=$username;
			$_SESSION['domain']=$domain;
			$_SESSION['waktu']=date("Y-m-d H:i:s");
			
			?><script language="javascript">document.location.href="admin/index.php?page=home";</script><?php
			
		}else{
			?><script language="javascript">document.location.href="index.php?status=Gagal Login";</script><?php
		}	
	}
	
		else if($domain=="pegawai"){
		$query=mysql_query("select * from pegawai where username='$username' and password='$password'");
		$cek=mysql_num_rows($query);
		$row=mysql_fetch_array($query);
		
		if($cek){
		$_SESSION['username']=$username;
		
			$_SESSION['domain']=$domain;
			$_SESSION['waktu']=date("Y-m-d H:i:s");
			
			
			?><script language="javascript">document.location.href="pegawai/index.php?page=home";</script><?php
			
		}else{
			?><script language="javascript">document.location.href="index.php?status=Gagal Login";</script><?php
		}
	}	
	
	else if($domain=="dosen"){
		$query=mysql_query("select * from dosen where Nip='$Nip' and Password='$password'");
		$cek=mysql_num_rows($query);
		$row=mysql_fetch_array($query);
		
		if($cek){
			$_SESSION['Nip']=$Nip;
			$_SESSION['domain']=$domain;
			$_SESSION['waktu']=date("Y-m-d H:i:s");
			
			
			?><script language="javascript">document.location.href="dosen/home.php";</script><?php
			
		}else{
			?><script language="javascript">document.location.href="index.php?status=Gagal Login";</script><?php
		}
	}	
	else if($domain=="mahasiswa"){
		$query=mysql_query("select * from identitas where Stb='$Stb' and Stb='$Stb2'");
		$cek=mysql_num_rows($query);
		$row=mysql_fetch_array($query);
		
		if($cek){
			$_SESSION['Stb']=$Stb;
			$_SESSION['domain']=$domain;
			$_SESSION['waktu']=date("Y-m-d H:i:s");
			
			
			?><script language="javascript">document.location.href="mahasiswa/home.php";</script><?php
			
		}else{
			?><script language="javascript">document.location.href="index.php?status=Gagal Login";</script><?php
		}
	}
			
}else{
	unset($_POST['login']);
}
?>

<html>
<head>
<title>SisfoAkademik Fikom</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="mos-css/mos-style.css"> <!--pemanggilan file css-->
</head>

<body>
<div id="header">
	<div class="inHeaderLogin"></div>
</div>

<div id="loginForm">
	<div class="headLoginForm">
	Login Dashboard
	</div>
	<div class="fieldLogin">
	<form method="POST" action="index.php">
	<label>Username</label><br>
	<input type="text" name="username" class="login"><br>
	<label>Password</label><br>
	<input type="password" name="password" class="login"><br>
            <select name="domain" class="login">
            	<option value="admin"> ADMIN </option>
				<option value="pegawai"> PEGAWAI </option>
				<option value="dosen"> DOSEN </option>
                <option value="mahasiswa"> MAHASISWA </option>
            </select> <br>
	<input type="submit" class="button" value="Login" name="login">
	</form>
	</div>
</div>
</body>
</html>