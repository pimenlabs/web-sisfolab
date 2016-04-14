<?php
error_reporting(0);	
  ob_start();
  session_start();
  
include "../config/conect.php";

if(isset($_POST['submit'])){
	
	$jumSis = $_POST['jumlah'];
		
	
	for ($i=1; $i<=$jumSis; $i++)
	{
	  
	   $nilai  = $_POST['nilai'.$i];
	   
	   $Stb = $_POST['Stb'.$i];
	   $id=$_POST['id'];
	   $query = "update inputkrs set Nilai='$nilai' where Stb='$Stb'";
	   $hasil=mysql_query($query);
	}
	
	if($hasil){
		?><script language="javascript">document.location.href="?page=nilai";</script><?php
	}else{
		?><script language="javascript">document.location.href="?page=nilaihasil";</script><?php
	}
	
	
}else{
	unset($_POST['submit']);
}

?>
   
    	<?php
		$id=$_GET['id'];
		$dosen=mysql_fetch_array(mysql_query("SELECT * FROM jadwal a, inputkrs b, identitas c WHERE b.indeks='$id' and a.indeks='$id' and b.Stb=c.Stb"));
		$mata_kuliah=mysql_fetch_array(mysql_query("SELECT * FROM jadwal a, inputkrs b, identitas c WHERE b.indeks='$id' and a.indeks='$id' and b.Stb=c.Stb"));
		$kelas=mysql_fetch_array(mysql_query("SELECT * FROM jadwal a, inputkrs b, identitas c WHERE b.indeks='$id' and a.indeks='$id' and b.Stb=c.Stb"));
		
		$nama_dosen=$dosen['Dosen'];
		$nama_mata_kuliah=$mata_kuliah['Matkul'];
		$nama_kelas=$kelas['Kelas'];
		
		?>
       <div class='grid_12'>
       <div class='widget_wrap'>
       <div class='widget_top'> <span class='h_icon blocks_images'></span>
       <h6>Input Nilai<br></h6>
        </div><div class='widget_content'>

<div class="widget_content" >
<form class="form_container left_label" action="" method="post" ><!--belu dikasih mmethod-->
<ul>

<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Dosen<span class="req">*</span></label>
<div class="form_input"> <input id="stb" name="nama_dosen" value="<?php echo $nama_dosen;?>" maxlength="50" class="large" type="text"> </div>
</div>
</li>

<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Mata Kuliah<span class="req">*</span></label>
<div class="form_input"> <input id="stb" name="nama_mata_kuliah" value="<?php echo $nama_mata_kuliah;?>" maxlength="50" class="large" type="text"> </div>
</div>
</li>

<li>
<div class="form_grid_12"> <label class="field_title" id="lusername" for="username">Kelas<span class="req">*</span></label>
<div class="form_input"> <input id="stb" name="nama_kelas" value="<?php echo $nama_kelas;?>" maxlength="50" class="large" type="text"> </div>
</div>
</li>
</ul>
</form>
</div>
</div></div>	
  <div class='widget_content'>
        <form id="mainform" action="home.php?page=nilaiupdate" method="post">
  
  <table class='display data_tbl'>
<thead> <tr>
<th style='text-align: justify;'>&nbsp; Nomor<br>
</th>
<th style='text-align: justify;'> Stb <br>
</th>
<td style='text-align: justify;'>Nama Mahasiswa<br>
</td>
<th style='text-align: justify;'> Grade <br>
</th>

</tr>
</thead> 
<tbody> 
	
        <?php
		$id=$_GET['id'];
		$view=mysql_query("SELECT * FROM jadwal a, inputkrs b, identitas c WHERE b.indeks='$id' and a.indeks='$id' and b.Stb=c.Stb");		
		$i = 1;
		while($row=mysql_fetch_array($view)){
			?>
            <?php echo "<input type='hidden' name='Stb".$i."' value='".$row['Stb']."' />"; ?>
			<tr>
				<td><?php echo $i;?></td>
				<td><?php echo $row['Stb'];?></td>
				<td><?php echo $row['Nama'];?></td>
				<td><?php echo "<input type='text' name='nilai".$i."' size='1' value='".$row['Nilai']."'/>"; ?></td>
			</tr>
			<?php
			$i++;
		}
			$jumSis = $i-1;
		?>
       
<?php
  echo "<tr class='gradeC'>

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
        </form>
</div>		
