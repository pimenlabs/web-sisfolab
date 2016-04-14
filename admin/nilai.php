<?php
include "cek_session.php";
$result = mysql_query("SELECT * FROM jadwal order by Matkul asc");
echo"<br>";
echo "<table border='1' align='center'>
<tr>
<th>Mata Kuliah</th>
<th>Kelas</th>
<th>Proses</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Matkul'] . "</td>";
  echo "<td>" . $row['Kelas'] . "</td>";
  echo "<td><a href=?page=nilaiupdate&id=$row[indeks]>Update</a></td>"; ?> 
  <?php
  echo "</tr>";

  echo "</tr>";
  }
echo "</table>";
echo"</body>";
?>