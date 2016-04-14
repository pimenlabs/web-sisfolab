<?php	
require_once "../config/conect.php";
// get value of id that sent from address bar
$id=$_GET['nip'];
// Delete data in mysql from row that has this id 
$sql="DELETE FROM pegawai WHERE Nip='$id'";
$result=mysql_query($sql);

// if successfully deleted
if($result){
?>
<script language="JavaScript">alert('Data pegawai berhasil Dihapus');
document.location.href="index.php?page=pegawai";</script> 
<?php
}

else {
echo "Gagal Hapus : ".mysql_error();
}

// close connection 
mysql_close();

?>
