<?php
	
require_once "../config/conect.php";
                     	                      	
?>

<div class='grid_12'>
<div class='widget_wrap'>
<div class='widget_top'> <span class='h_icon blocks_images'></span>
<h6>Master Mata Kuliah<br></h6>
</div><div class='widget_content'>

<br>
<h6>Semester 1<br></h6>
<br>
<table class='display data_tbl'>
<thead> <tr>
<th style='text-align: justify;'> Kode Mata Kuliah<br>
</th>
<th style='text-align: justify;'> Nama&nbsp;Mata Kuliah <br>
</th>

<th style='text-align: justify;'> Semester<br>
</th>
<th style='text-align: justify;'> SKS <br>
</th>
<th style='text-align: justify;'> Aksi <br>
</th>
</tr>
</thead> 
<tbody> 
<?php 
	$data1 = mysql_query("select * from matkul where Semester='1'");
while($r = mysql_fetch_array($data1)){ 
	?>
<?php
  echo "<tr class='gradeC'>
                                     <td><a class=s href=?page=editmatakuliah&id=$r[indeks]><img src=images/edit_2.png> $r[Kode]</td>
                        		         <td>$r[Matkul]</td>  
                                     <td>$r[Semester]</td>     		         
                                     <td>$r[SKS]</td>    
									 <td><a class=s href=?page=hapusmatakuliah&id=$r[indeks]><img src=images/error.png></td>
                                     </tr>
                                     ";?>
                                     <?php  $T1=$T1+$r[SKS];?>

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
<td>JUMLAH SKS : <?php echo $T1;?><br><br>
</td>
</tr>
</tfoot>
</table>


<br>
<h6>Semester 2<br></h6>
<br>
<table class='display data_tbl'>
<thead> <tr>
<th style='text-align: justify;'> Kode Matakuliah<br>
</th>
<th style='text-align: justify;'> Nama&nbsp; Matakuliah <br>
</th>

<th style='text-align: justify;'> Semester<br>
</th>
<th style='text-align: justify;'> SKS <br>
</th>
<th style='text-align: justify;'> Aksi <br>
</th>
</tr>
</thead> 
<tbody> 
<?php 
	$data1 = mysql_query("select * from matkul where Semester='2'");
while($r = mysql_fetch_array($data1)){ 
	?>
<?php
  echo "<tr class='gradeC'>
                                     <td><a class=s href=?page=editmatakuliah=$r[Kode]><img src=images/edit_2.png> $r[Kode]</td>
                        		         <td>$r[Matkul]</td>  
                                     <td>$r[Semester]</td>     		         
                                     <td>$r[SKS]</td>   
									 <td><a class=s href=?page=hapusmatakuliah&id=$r[Kode]><img src=images/error.png>Hapus</td>
                                     </tr>
                                     ";?>
                                     <?php  $T2=$T2+$r[SKS];?>

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
<td>JUMLAH SKS : <?php echo $T2;?><br><br>
</td>
</tr>
</tfoot>
</table>


<br>
<h6>Semester 3<br></h6>
<br>
<table class='display data_tbl'>
<thead> <tr>
<th style='text-align: justify;'> Kode Matakuliah<br>
</th>
<th style='text-align: justify;'> Nama&nbsp; Matakuliah <br>
</th>

<th style='text-align: justify;'> Semester<br>
</th>
<th style='text-align: justify;'> SKS <br>
</th>
<th style='text-align: justify;'> Aksi <br>
</th>
</tr>
</thead> 
<tbody> 
<?php 
	$data1 = mysql_query("select * from matkul where Semester='3'");
while($r = mysql_fetch_array($data1)){ 
	?>
<?php
  echo "<tr class='gradeC'>
                                     <td><a class=s href=?page=editmatakuliah=$r[Kode]><img src=images/edit_2.png> $r[Kode]</td>
                        		         <td>$r[Matkul]</td>  
                                     <td>$r[Semester]</td>     		         
                                     <td>$r[SKS]</td>    
									 <td><a class=s href=?page=hapusmatakuliah&id=$r[Kode]><img src=images/error.png>Hapus</td>
                                     </tr>
                                     ";?>
                                     <?php  $T3=$T3+$r[SKS];?>

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
<td>JUMLAH SKS : <?php echo $T3;?><br><br>
</td>
</tr>
</tfoot>
</table>

<br>
<h6>Semester 4<br></h6>
<br>
<table class='display data_tbl'>
<thead> <tr>
<th style='text-align: justify;'> Kode Matakuliah<br>
</th>
<th style='text-align: justify;'> Nama&nbsp; Matakuliah <br>
</th>

<th style='text-align: justify;'> Semester<br>
</th>
<th style='text-align: justify;'> SKS <br>
</th>
<th style='text-align: justify;'> Aksi <br>
</th>
</tr>
</thead> 
<tbody> 
<?php 
	$data1 = mysql_query("select * from matkul where Semester='4'");
while($r = mysql_fetch_array($data1)){ 
	?>
<?php
  echo "<tr class='gradeC'>
                                     <td><a class=s href=?page=editmatakuliah=$r[Kode]><img src=images/edit_2.png> $r[Kode]</td>
                        		         <td>$r[Matkul]</td>  
                                     <td>$r[Semester]</td>     		         
                                     <td>$r[SKS]</td>   
									 <td><a class=s href=?page=hapusmatakuliah&id=$r[Kode]><img src=images/error.png>Hapus</td>
                                     </tr>
                                     ";?>
                                     <?php  $T4=$T4+$r[SKS];?>

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
<td>JUMLAH SKS : <?php echo $T4;?><br><br>
</td>
</tr>
</tfoot>
</table>



<br>
<h6>Semester 5<br></h6>
<br>
<table class='display data_tbl'>
<thead> <tr>
<th style='text-align: justify;'> Kode Matakuliah<br>
</th>
<th style='text-align: justify;'> Nama&nbsp; Matakuliah <br>
</th>

<th style='text-align: justify;'> Semester<br>
</th>
<th style='text-align: justify;'> SKS <br>
</th>
<th style='text-align: justify;'> Aksi <br>
</th>
</tr>
</thead> 
<tbody> 
<?php 
	$data1 = mysql_query("select * from matkul where Semester='5'");
while($r = mysql_fetch_array($data1)){ 
	?>
<?php
  echo "<tr class='gradeC'>
                                     <td><a class=s href=?page=editmatakuliah=$r[Kode]><img src=images/edit_2.png> $r[Kode]</td>
                        		         <td>$r[Matkul]</td>  
                                     <td>$r[Semester]</td>     		         
                                     <td>$r[SKS]</td> 
									 <td><a class=s href=?page=hapusmatakuliah&id=$r[Kode]><img src=images/error.png>Hapus</td>
                                     </tr>
                                     ";?>
                                     <?php  $T5=$T5+$r[SKS];?>

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
<td>JUMLAH SKS : <?php echo $T5;?><br><br>
</td>
</tr>
</tfoot>
</table>


<br>
<h6>Semester 6<br></h6>
<br>
<table class='display data_tbl'>
<thead> <tr>
<th style='text-align: justify;'> Kode Matakuliah<br>
</th>
<th style='text-align: justify;'> Nama&nbsp; Matakuliah <br>
</th>

<th style='text-align: justify;'> Semester<br>
</th>
<th style='text-align: justify;'> SKS <br>
</th>
<th style='text-align: justify;'> Aksi <br>
</th>
</tr>
</thead> 
<tbody> 
<?php 
	$data1 = mysql_query("select * from matkul where Semester='6'");
while($r = mysql_fetch_array($data1)){ 
	?>
<?php
  echo "<tr class='gradeC'>
                                     <td><a class=s href=?page=editmatakuliah=$r[Kode]><img src=images/edit_2.png> $r[Kode]</td>
                        		         <td>$r[Matkul]</td>  
                                     <td>$r[Semester]</td>     		         
                                     <td>$r[SKS]</td>    
                                     <td><a class=s href=?page=hapusmatakuliah&id=$r[Kode]><img src=images/error.png>Hapus</td>
									 </tr>
                                     ";?>
                                     <?php  $T6=$T6+$r[SKS];?>

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
<td>JUMLAH SKS : <?php echo $T6;?><br><br>
</td>
</tr>
</tfoot>
</table>


<br>
<h6>Semester 7<br></h6>
<br>
<table class='display data_tbl'>
<thead> <tr>
<th style='text-align: justify;'> Kode Matakuliah<br>
</th>
<th style='text-align: justify;'> Nama&nbsp; Matakuliah <br>
</th>

<th style='text-align: justify;'> Semester<br>
</th>
<th style='text-align: justify;'> SKS <br>
</th>
<th style='text-align: justify;'> Aksi <br>
</th>
</tr>
</thead> 
<tbody> 
<?php 
	$data1 = mysql_query("select * from matkul where Semester='7'");
while($r = mysql_fetch_array($data1)){ 
	?>
<?php
  echo "<tr class='gradeC'>
                                     <td><a class=s href=?page=editmatakuliah=$r[Kode]><img src=images/edit_2.png> $r[Kode]</td>
                        		         <td>$r[Matkul]</td>  
                                     <td>$r[Semester]</td>     		         
                                     <td>$r[SKS]</td>    
									 <td><a class=s href=?page=hapusmatakuliah&id=$r[Kode]><img src=images/error.png>Hapus</td>
									 </tr>
                                     ";?>
                                     <?php  $T7=$T7+$r[SKS];?>

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
<td>JUMLAH SKS : <?php echo $T7;?><br><br>
</td>
</tr>
</tfoot>
</table>


<br>
<h6>Semester 8<br></h6>
<br>
<table class='display data_tbl'>
<thead> <tr>
<th style='text-align: justify;'> Kode Matakuliah<br>
</th>
<th style='text-align: justify;'> Nama&nbsp; Matakuliah <br>
</th>

<th style='text-align: justify;'> Semester<br>
</th>
<th style='text-align: justify;'> SKS <br>
</th>
<th style='text-align: justify;'> Aksi <br>
</th>
</tr>
</thead> 
<tbody> 
<?php 
	$data1 = mysql_query("select * from matkul where Semester='8'");
while($r = mysql_fetch_array($data1)){ 
	?>
<?php
  echo "<tr class='gradeC'>
                                     <td><a class=s href=?page=editmatakuliah=$r[Kode]><img src=images/edit_2.png> $r[Kode]</td>
                        		         <td>$r[Matkul]</td>  
                                     <td>$r[Semester]</td>     		         
                                     <td>$r[SKS]</td>    
                                     <td><a class=s href=?page=hapusmatakuliah&id=$r[Kode]><img src=images/error.png>Hapus</td>
									 </tr>
                                     ";?>
                                     <?php  $T8=$T8+$r[SKS];?>

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
<td>JUMLAH SKS : <?php echo $T8;?><br><br>
</td>
</tr>
</tfoot>
</table>
<?php $Ttot=$T1+$T2+$T3+$T4+$T5+$T6+$T17+$T18;?>
                       <h3>TOTAL SELURUH SKS : <?echo $Ttot;?></h3>
<br>
</div>
</div>
</div>


