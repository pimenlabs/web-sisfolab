<?php
$my['host'] = "localhost";
$my['user'] = "root";
$my['pass'] = "";
$my['dbs'] = "ilkom_sisfak";

$koneksi=mysql_connect($my['host'],$my['user'],$my['pass']);
if (! $koneksi){
  echo "Gagal Koneksi..!".mysql_error();
  }
mysql_select_db($my['dbs'])
or die ("Database Tidak Ada".mysql_error());
?>
