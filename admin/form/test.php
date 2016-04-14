
<form action="?page=jadwal" method="post">
<table width="95%">
<tr>
<td width="125px"><b>Kode</b></td>
<td>
<?php
			include "../../config/conect.php";
$result = mysql_query("select * from matkul order by Kode"); 
$jsArray = "var MatkulArray = new Array();\n"; 
echo '<select name="kode" onchange="changeValue(this.value)">'; 
echo '<option>-------</option>'; 
while ($row = mysql_fetch_array($result)) { 
echo '<option value="' . $row['Kode'] . '">' . $row['Kode'] . '</option>'; 
$jsArray .= "MatkulArray['" . $row['Kode'] . "'] = {nama_matkul:'" . addslashes($row['Matkul']) ."'};\n"; 
} 
echo '</select>'; 
?>
</select></td>
</tr>
<tr>
<td><b>Mata Kuliah</b></td>
<td><input type="text" name="matkul" id="hasil_matkul" class="panjang"/></td>
</tr>	
<tr><td></td><td>
<input type="submit" class="button" value="Simpan">
<input type="reset" class="button" value="Reset">
</td></tr>
</table>
</form>
<script type="text/javascript"> 
<?php echo $jsArray; ?> 
function changeValue(id){ 
document.getElementById('hasil_matkul').value = MatkulArray[id].nama_matkul; 
}; 
</script> 
