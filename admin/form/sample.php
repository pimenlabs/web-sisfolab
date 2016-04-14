
<div class="grid_12 full_block">
<div class="widget_wrap">
<div class="widget_top"> <span class="h_icon list"></span>
<h6>Form</h6>
</div>
<div class="widget_content">
<h3>Personal Information</h3>
<p>Cras erat diam, consequat quis tincidunt nec, eleifend a turpis.
Aliquam ultrices feugiat metus, ut imperdiet erat mollis at. Curabitur
mattis risus sagittis nibh lobortis vel. </p>
<form action="#" method="post" class="form_container left_label">

<ul>
<li>
<fieldset> <legend>Personal Information</legend>
<ul>
<li>
 <form action=akademik/akademikmatakuliahact.php?page=akademikmatakuliah&PHPIdSession=addmk method=post>
              <table id=tablemodul>    <tr>
      <td class="cc">Institusi</td>   <td colspan=2>  <select name="i" onChange="MM_jumpMenu('parent',this,0)">
        <option value="media.php?page=akademikmatakuliah&PHPIdSession=TambahMtk">- Pilih Institusi -</option>
    <option value='?page=akademikmatakuliah&PHPIdSession=TambahMtk&id=14032012' > 14032012 - Universitas Lokomedia</option>      </select>
      <input name="i" type="hidden" value=""></td>
    </tr>
    <tr>
      <td class="cc">Jurusan</td>   <td colspan=2>  <select name="jur" onChange="MM_jumpMenu('parent',this,0)">
        <option value="media.php?page=akademikmatakuliah&PHPIdSession=TambahMtk">- Pilih Jurusan -</option>
          </select>
      <input name="jur" type="hidden" value=""></td>
    </tr>
   
              <tr><td class=cc>Kode Matakuliah *</td>    <td>      <input type=text name=kmk></td></tr>
              <tr><td class=cc>Nama Matakuliah *</td>    <td>      <input type=text name=nm size=50></td></tr>
              <tr><td class=cc>Nama (Inggris) *</td>    <td>      <input type=text name=ne size=50></td></tr>
              <tr><td class=cc>Jenis *</td>    <td>      <select name='jmk'>
                        <option value=0 selected>- Pilih Jenis Matakuliah -</option><option value=A>A - WAJIB</option><option value=B>B - PILIHAN</option><option value=C>C - WAJIB PERMINTAAN</option><option value=D>D - PILIHAN PERMINTAAN</option><option value=S>S - TA/SKRIPSI/THESIS/DISERTASI</option></select></td></tr>
              <tr><td class=cc>Kelompok Matakuliah *</td>    <td>      <select name='klmptk'>
                        <option value=0 selected>- Pilih Kelompok Matakuliah -</option><option value=A>A - MPK-Pengembangan Kepribadian</option><option value=B>B - MKK-KEILMUAN DAN KETERAMPILAN</option><option value=C>C - MKB-KEAHLIAN BERKARYA</option><option value=D>D - MPB-PERILAKU BERKARYA</option><option value=E>E - MBB-BERKEHIDUPAN BERMASYARAKAT</option><option value=F>F - MKU/MKDU</option><option value=G>G - MKDK</option><option value=H>H - MKK</option></select></td></tr>
              <tr><td class=cc>Status Matakuliah *</td>    <td>      <select name='stmk'>
                        <option value=0 selected>- Pilih Status -</option><option value=A>A - AKTIF</option><option value=H>H - HAPUS</option><option value=N>N - NON AKTIF</option></select></td></tr>
              <tr><td class=cc>Jenis Kurikulum *</td>    <td>      <select name='jkur'>
                        <option value=0 selected>- Pilih Jenis -</option><option value=1>1 - Inti</option><option value=2>2 - Institusi</option></select></td></tr>
             <tr><td class=cc>Nama Kurikulum *</td>    <td>      <select name='nkur'>
                        <option value=0 selected>- Pilih Nama Kurikulum -</option></select></td></tr>
              <tr><td class=cc>Sesi *</td>    <td>      <input type=text name=sesi size=4></td></tr>
              <tr><td class=cc>SKS *</td>    <td>     <input type=text name=sks size=4></td></tr>
             <tr><td class=cc>Penanggung Jawab *</td>    <td>      <select name='pj'>
                        <option value=0 selected>- Pilih Penanggung Jawab -</option></select></td></tr>
              <tr><td class=cc>Keterangan</td>    <td>      <textarea name=Ket cols=45 rows=5></textarea></td></tr>
              <tr><td class=cc>Aktif *</td>   <td>      <input type=radio name=ak value=Y> Y     
                                             <input type=radio name=ak  value=N>N
            </td></tr><tr><td colspan=2><input type=submit value=Simpan class=tombol>                      
      	 </td>
         </tr>
       </table>
      </form>
</li>
</ul>
</fieldset>
</li>
</ul>

<ul>
<li>
</li>
</ul>
</form>
</div>
</div>
</div>
