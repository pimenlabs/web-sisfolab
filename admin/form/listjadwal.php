<?php
	
require_once "../config/conect.php";
                     	                      	
?>
<div class='grid_12'>
<div class='widget_wrap'>
<div class='widget_top'> <span class='h_icon blocks_images'></span>
<h6>Master Jadwal Matakuliah<br></h6>
</div><div class='widget_content'>
<table class='display data_tbl'>
<thead> <tr>

<th style='text-align: justify;'> Kode <br>
</th>
<td style='text-align: justify;'>Nama Matakuliah<br>
</td>
<th style='text-align: justify;'> Jumlah SKS <br>
</th>
<th style='text-align: justify;'>Semester<br>
</th>
<th style='text-align: justify;'>Kelas </th>
<td style='text-align: justify;'>Hari<br>
</td>
<td style='text-align: justify;'>Ruang<br>
</td>
<td style='text-align: justify;'>Jam<br>
</td>
<td style='text-align: justify;'>Dosen<br>
</td>

<td style='text-align: justify;'>Aksi<br>
</td>

</tr>
</thead> 
<tbody> 
	
<?php 
	$data1 = mysql_query("select * from jadwal");
while($r = mysql_fetch_array($data1)){ 
		       		
	?>
<?php
  echo "<tr class='gradeC'>
      
                                    <td><a class=s href=?page=editjadwal&id=$r[indeks]>$r[Kode]</td>
                                    <td>$r[Matkul]</td>
                        		         <td>$r[SKS]</td>  
                                     <td>$r[Semester] </td>
                                     <td>$r[Kelas]</td>     		         
                                     <td>$r[Hari]</td>
                                     <td>$r[Ruang]</td> 
                                     <td>$r[Jam]</td>   
                                     <td>$r[Dosen]</td>
                                     
									 <td><a class=s href=?page=hapusjadwal&id=$r[indeks]><img src=images/error.png></td>
                                     </tr>
                                     ";?>
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

