<div class='grid_12'>
<div class='widget_wrap'>
<div class='widget_top'> <span class='h_icon blocks_images'></span>
<h6>Master Transkrip Nilai<br></h6>
</div><div class='widget_content'>

<div class="widget_content" >
<table class='display data_tbl'>
<thead> <tr>
<th style='text-align: justify;'>&nbsp; Mata Kuliah<br>
</th>
<th style='text-align: justify;'> Kelas<br>
</th>
<td style='text-align: justify;'>Proses<br>
</td>

</tr>
</thead> 
<tbody> 
	
<?php 
	$data1 = mysql_query("SELECT * FROM jadwal order by Matkul asc");
while($r = mysql_fetch_array($data1)){ 
		       		
	?>
<?php
  echo "<tr class='gradeC'>
           <td>$r[Matkul]</td>
                        		         <td>$r[Kelas]</td>  
                                     <td><a href=?page=nilaiupdate&id=$r[indeks]>Update</a></td>
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
