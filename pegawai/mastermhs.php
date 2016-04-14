<?php include "cek_session.php"; ?>
<h3>Data Mahasiswa</h3>
<?php
$result = mysql_query("SELECT * FROM identitas");
echo"<br>";
echo "<table border='1' align='center'>
<tr>
<th>Stambuk</th>
<th>Nama</th>
<th>Alamat</th>
<th>Tempat, Tgl.Lahir</th>
<th>Agama</th>
<th>No Telepon</th>
<th>Asal Sekolah</th>
<th>Jurusan</th>
<th>Angkatan</th>
<th>Jenis Kelamin</th>
<th>Penasehat Akademik</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<td align='center'>" . $row['Stb'] . "</td>";
  echo "<td align='center'>" . $row['Nama'] . "</td>";
  echo "<td align='left'>" . $row['Alamat'] . "</td>";
  echo "<td align='center'>" . $row['TTL'] . "</td>";
  echo "<td align='center'>" . $row['Agama'] . "</td>";
  echo "<td align='center'>" . $row['No_Tlpn'] . "</td>";
  echo "<td align='center'>" . $row['Asal_Sklh'] . "</td>";
  echo "<td align='center'>" . $row['Jurusan'] . "</td>";
  echo "<td align='left'>" . $row['Angkatan'] . "</td>"; 
  echo "<td align='center'>" . $row['JK'] . "</td>";
  echo "<td align='left'>" . $row['PA'] . "</td>"; ?>
  <?php
  echo "</tr>";

  echo "</tr>";
  }
echo "</table>";
echo"</body>";
?>