<?php	
require_once "../config/conect.php";
// get value of id that sent from address bar
$id=$_GET['id'];
// Delete data in mysql from row that has this id 
$sql="DELETE FROM matkul WHERE indeks='$id'";
$result=mysql_query($sql);

// if successfully deleted
if($result){
?>
<script language="JavaScript">alert('Mata Kuliah berhasil Dihapus');
document.location.href="index.php?page=matakuliah";</script> 
<?php
}

else {
echo "Gagal Hapus : ".mysql_error();
}

// close connection 
mysql_close();

?>