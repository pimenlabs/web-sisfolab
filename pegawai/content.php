<?php 
if ($_GET[page]=='home'){
 //include 'form/content/tab-menu.php';
  include 'form/content/tab-1.php';
  //include 'form/content/tab-2.php';

}
elseif ($_GET[page]=='matakuliah'){
	echo '<br>';
	include 'form/sub-menu.php';
    include 'form/master_matkul.php';
    //include 'form/test.php';
    
}
elseif ($_GET[page]=='tambahmatkul'){
	echo '<br>';
	include 'form/sub-menu.php';
    include 'form/tambahmatkul.php';
}
elseif ($_GET[page]=='hapusmatakuliah'){
	echo '<br>';
	include 'form/sub-menu.php';
    include 'form/hapusmatakuliah.php';
}
elseif ($_GET[page]=='mahasiswa'){
	echo '<br>';
	include 'form/menu_mhs.php';
    include 'form/mahasiswa.php';
}
elseif ($_GET[page]=='tambahmahasiswa'){
	echo '<br>';
	include 'form/menu_mhs.php';
    include 'form/mhs.php';
}

elseif ($_GET[page]=='editmahasiswa'){
	echo '<br>';
	include 'form/menu_mhs.php';
    include 'form/editmhs.php';
}

elseif ($_GET[page]=='hapusmahasiswa'){
	echo '<br>';
	include 'form/menu_mhs.php';
    include 'form/hapusmahasiswa.php';
}

elseif ($_GET[page]=='hapusjadwal'){
	echo '<br>';
	include 'form/menu_jadwal.php';
    include 'form/hapusjadwal.php';
}

elseif ($_GET[page]=='jadwalkuliah'){
	echo '<br>';
	include 'form/menu_jadwal.php';
   include 'form/listjadwal.php';
}

elseif ($_GET[page]=='ruang'){
	echo '<br>';
	include 'form/menu_ruang.php';
    include 'form/list_ruang.php';
}
elseif ($_GET[page]=='tambahruang'){
	echo '<br>';
	include 'form/menu_ruang.php';
    include 'form/tambahruang.php';
}

elseif ($_GET[page]=='hapusruang'){
	echo '<br>';
	include 'form/menu_ruang.php';
    include 'form/hapusruang.php';
}
elseif ($_GET[page]=='editruang'){
	echo '<br>';
	include 'form/menu_ruang.php';
    include 'form/editruang.php';
}

elseif ($_GET[page]=='penjadwalankuliah'){
	echo '<br>';
	include 'form/menu_jadwal.php';
   include 'form/penjadwalan.php';
}

elseif ($_GET[page]=='dosen'){
	echo '<br>';
	include 'form/list_dosen.php';
   include 'form/dosen.php';
}

elseif ($_GET[page]=='editdosen'){
	echo '<br>';
	include 'form/list_dosen.php';
   include 'form/editdosen.php';
}elseif ($_GET[page]=='tambahdosen'){
	echo '<br>';
	include 'form/list_dosen.php';
   include 'form/tambahdosen.php';
}
elseif ($_GET[page]=='hapusdosen'){
	echo '<br>';
	include 'form/list_dosen.php';
   include 'form/hapusdosen.php';
}
elseif ($_GET[page]=='pegawai'){
	echo '<br>';
	include 'form/menupegawai.php';
   include 'form/lispegawai.php';
}elseif ($_GET[page]=='editpegawai'){
	echo '<br>';
	include 'form/menupegawai.php';
   include 'form/editpegawai.php';

}
elseif ($_GET[page]=='waktu'){
	echo '<br>';
	include 'form/menuwaktu.php';
   include 'form/listwaktu.php';

}
elseif ($_GET[page]=='editjam'){
	echo '<br>';
	include 'form/menuwaktu.php';
   include 'form/editjam.php';

}
elseif ($_GET[page]=='hapuspegawai'){
	echo '<br>';
	include 'form/menupegawai.php';
   include 'form/hapuspegawai.php';
}
elseif ($_GET[page]=='tambahpegawai'){
	echo '<br>';
	include 'form/menupegawai.php';
   include 'form/pegawai.php';
}
elseif ($_GET[page]=='transkripnilai'){
	echo '<br>';
	include 'form/menu_transkrip.php';
    include 'form/transkrip_nilai.php';
}

elseif ($_GET[page]=='nilaiupdate'){
	echo '<br>';
	include 'form/menu_transkrip.php';
    include 'form/nilaiupdate.php';
}

elseif ($_GET[page]=='setting'){
	echo '<br>';
	include 'form/menu_setting.php';
    //include 'form/nilaiupdate.php';
}
elseif ($_GET[page]=='editmatakuliah'){
	echo '<br>';
		include 'form/sub-menu.php';
    include 'form/editmatakuliah.php';
}
elseif ($_GET[page]=='editjadwal'){
	echo '<br>';
	include 'form/menu_jadwal.php';
    include 'form/editjadwal.php';
}

// Exit //
elseif ($_GET[page]=='exit'){  
    include 'exit/exit.php';
}

// Apabila modul tidak ditemukan
else{
echo "<div class='grid_12'>
<div class='widget_wrap'>
<div class='widget_top'> <span class='h_icon blocks_images'></span>
<h6>Warning <br></h6>
</div><div class='widget_content'>
<h3>LINK YANG ANDA PILIH BELUM TERSEDIA</h3>
</div></div></div>";
}
?>
