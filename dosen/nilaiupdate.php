<?php
include "cek_session.php";
include "../conn.php";

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
    
		<h3>Input Nilai</h3>
        <table border="0" cellpadding="0" cellspacing="0">
        <tr>
          <th align='left'>Dosen</th>
          <td><input type="text" class="" name="nama_dosen" value="<?php echo $nama_dosen;?>" disabled="disabled"/></td>
          <td></td>
        </tr>
         <tr align='left'>
          <th>Mata Kuliah</th>
          <td><input type="text" class="" name="nama_mata_kuliah" value="<?php echo $nama_mata_kuliah;?>" disabled="disabled"/></td>
          <td></td>
        </tr>
        <tr align='left'>
          <th>Kelas</th>
          <td><input type="text" class="" name="nama_kelas" value="<?php echo $nama_kelas;?>" disabled="disabled"/></td>
          <td></td>
        </tr>
      </table>
      <br />
	  
        <form id="mainform" action="home.php?page=nilaiupdate" method="post">
        <table border="1" class="data3">
        <tr style="background-color: rgb(128,255,0); font-weight: bold; text-align:center;">
            <th>Nomor</th>
            <th>Stb</th>
            <th>Nama Mahasiswa</th>
            <th>Grade</th>
        </tr>
        
        
        <?php
		$id=$_GET['id'];
		$view=mysql_query("SELECT * FROM jadwal a, inputkrs b, identitas c WHERE b.indeks='$id' and a.indeks='$id' and b.Stb=c.Stb");		
		$i = 1;
		while($row=mysql_fetch_array($view)){
			?>
            <?php echo "<input type='hidden' name='Stb".$i."' value='".$row['Stb']."' />"; ?>
			<tr>
				<td class="data" style="text-align: center;"><?php echo $i;?></td>
				<td class="data" style="text-align: center;"><?php echo $row['Stb'];?></td>
				<td class="data" style="text-align: center;"><?php echo $row['Nama'];?></td>
				<td class="data" style="text-align: center;"><?php echo "<input type='text' name='nilai".$i."' size='1' value='".$row['Nilai']."'/>"; ?></td>
			</tr>
			<?php
			$i++;
		}
			$jumSis = $i-1;
		?>
        <input type="hidden" name="jumlah" value="<?php echo $jumSis ?>" />
        <tr>
            <td colspan="4" align="center"><input type="submit" onclick="return confirm('Apakah Anda yakin?')" class="button" value="Update" name="submit"/></td>
        </tr>
        </table>
        </form>
		
