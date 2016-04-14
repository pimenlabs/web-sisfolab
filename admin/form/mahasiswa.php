<?php
	
require_once "../config/conect.php";
                     	                      	
?>
<div class='grid_12'>
<div class='widget_wrap'>
<div class='widget_top'> <span class='h_icon blocks_images'></span>
<h6>Master Mahasiswa<br></h6>
</div><div class='widget_content'>
<table class='display data_tbl'>
<thead> <tr>
<th style='text-align: justify;'>&nbsp; Stambuk<br>
</th>
<th style='text-align: justify;'> Nama <br>
</th>
<td style='text-align: justify;'>Jenis Kelamin<br>
</td>
<th style='text-align: justify;'> Alamat <br>
</th>
<th style='text-align: justify;'>&nbsp; TTL<br>
</th>
<th style='text-align: justify;'>Agama </th>
<td style='text-align: justify;'>Hp<br>
</td>
<td style='text-align: justify;'>Asal Sekolah<br>
</td>
<td style='text-align: justify;'>Jurusan<br>
</td>
<td style='text-align: justify;'>Angkatan<br>
</td>

<th style='text-align: justify;'> Aksi <br>
</th>
</tr>

</tr>
</thead> 
<tbody> 
	
<?php 
	$data1 = mysql_query("select * from identitas");
while($r = mysql_fetch_array($data1)){ 
		       		
	?>
<?php
  echo "<tr class='gradeC'>
                                    <td><a class=s href=?page=editmahasiswa&stb=$r[Stb]>$r[Stb]</td>
                                    <td>$r[Nama]</td>
                        		         <td>$r[JK]</td>  
                                     <td>$r[Alamat]</td>
                                     <td>$r[TTL] </td>
                                     <td>$r[Agama]</td>     		         
                                     <td>$r[No_Tlpn]</td>
                                     <td>$r[Asal_Sklh]</td>   
                                     <td>$r[Jurusan]</td> 
                                     <td>$r[Angkatan]</td>
                                     <td><a class=s href=?page=hapusmahasiswa&stb=$r[Stb]><img src=images/error.png></td>
                                     </tr>
                                     ";?>
                                     <?php  $T11=$T11+$r[SKS];?>

 <?php } ?>
</tbody>
<tfoot> <tr>
<th><br>
</th>
<th><br>
</th>
<th><br>
</th>
<th><br>
</th>
<th><br>
</th>
<td style='vertical-align: top;'><br>
</td>
<td style='vertical-align: top;'><br>
</td>
</tr>
</tfoot>
</table>

</div>
</div>
</div>
