<?php
session_start();
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=export_diterima.xls");
require_once '../core/session.php';
if(VerifikatorCek()):
        die("Error");
    else:
        UserAktif(); 
        $admin_uid=$DataUser[0];
        $admin_username=$DataUser[1];
        $admin_email=$DataUser[2];
        $admin_nama=$DataUser[3];
        $admin_role=$DataUser[4];
        $admin_foto=$DataUser[5]; 
       
    endif;
require_once '../../config/database.php';
require_once '../core/function.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Export Data</title>
    <style type="text/css">
        .kapital{text-transform:uppercase;}
    </style>
</head>
<body>
   <!-- New line 19 -->
    <table border="1">
        <tr>
            <td colspan="79" align="center"> <h3>DATA SEMUA DITERIMA</h3></td>
        </tr>
        <tr>
            <thead>
                <th colspan="32">DATA PRIBADI</th>
                <th colspan="20">DATA ORANGTUA</th>
                <th colspan="6">DATA ASAL SEKOLAH</th>
            </thead>
        </tr>
  <tr>
    <td><b>NO</b></td>
    <td><b>STATUS PENDAFTARAN</b></td>
    <td><b>NAMA</b></td>
    <td><b>NISN</b></td>
    <td><b>NIK</b> </td>
    <td><b>NO. KARTU KELUARGA</b> </td>
    <td><b>TMPT TGL LAHIR</b> </td>
    <th>AGAMA</th>
    <th>GOL. DARAH</th>
    <th>TINGGI BADAN</th>
    <th>BERAT BADAN</th>
    <th>RIWAYAT PENYAKIT</th>
    <th>STATUS DLM KELUARGA</th>
    <th>ANAK KE</th>
    <th>JUMLAH SAUDARA</th>
    <th>MODE TRANSPORTASI</th>
    <th>TEMPAT TINGGAL</th>
    <th>JARAK RUMAH</th>
    <th>TITIK KOORDINAT</th>
    <th>HOBI</th>
    <th>PRESTASI</th>
    <th>ALAMAT</th>
    <th>KONTAK</th>
    <th>JURUSAN</th>
    <th>JALUR DAFTAR</th>
    <th>KELAS</th> 
    <th>NO KKS</th>
    <th>NO PKH</th>
    <th>NO KIP</th>             
    <th>KODE DAFTAR</th>
    <th>TGL.DAFTAR</th>
    <th>TGL.UPDATE</th>
    <th>NAMA AYAH</th>
    <th>NIK</th>
    <th>TEMPAT TGL LAHIR</th>
    <th>STATUS</th>
    <th>PENDIDIKAN</th>
    <th>PEKERJAAN</th>
    <th>PENGHASILAN</th>
    <th>NAMA IBU</th>
    <th>NIK</th>
    <th>TEMPAT TGL LAHIR</th>
    <th>STATUS</th>
    <th>PENDIDIKAN</th>
    <th>PEKERJAAN</th>
    <th>PENGHASILAN</th>
    <th>NAMA WALI</th>
    <th>NIK</th>
    <th>TEMPAT TGL LAHIR</th>
    <th>PENDIDIKAN</th>
    <th>PEKERJAAN</th>
    <th>PENGHASILAN</th>
    <th>ASAL SEKOLAH</th>
    <th>NAMA SEKOLAH</th>
    <th>STATUS SEKOLAH</th>
    <th>ALAMAT</th>
    <th>NO SERI SKHUN</th>
    <th>NO SERI IJAZAH</th>
    <td colspan="20" align="center"><b>NILAI RAPORT</b></td> 
    <td rowspan="2" align="center">RATA - RATA</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="4" align="center" >SMT 1 </td>
    <td colspan="4" align="center">Semester 2 </td>
    <td colspan="4" align="center">Semester 3 </td>
    <td colspan="4" align="center">Semester 4</td>
    <td colspan="4" align="center">Semester 5</td>     
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
   
    <td>IPA</td>
    <td>MAT</td>
    <td>IND</td>
    <td>ING</td>

    <td>IPA</td>
    <td>MAT</td>
    <td>IND</td>
    <td>ING</td>

    <td>IPA</td>
    <td>MAT</td>
    <td>IND</td>
    <td>ING</td>

    <td>IPA</td>
    <td>MAT</td>
    <td>IND</td>
    <td>ING</td>

    <td>IPA</td>
    <td>MAT</td>
    <td>IND</td>
    <td>ING</td>

 


  </tr>
  <?php
        $no=1;
        $Export=Export_Filter();
        while($row=$Export->fetch_array()){
        ?>
  <tr>
    <td><?php echo $no; ?></td>
    <td class="kapital"><?php echo $row['status_pendaftaran']; ?> </td>
    <td class="kapital"><?php echo $row['nama']; ?> </td>
    <td class="kapital"><?php echo '"'.$row['nisn'].'"'; ?></td>
    <td class="kapital"><?php echo '"'.$row['no_ktp'].'"'; ?></td>
    <td class="kapital"><?php echo '"'.$row['no_kk'].'"'; ?></td>
    <td class="kapital"><?php echo $row['tempat_lahir'].$row['tanggal_lahir']; ?></td>
    <td class="kapital"><?php echo $row['agama']; ?></td>
    <td class="kapital"><?php echo $row['golongan_darah']; ?></td>
    <td class="kapital"><?php echo $row['tinggi_badan']; ?></td>
    <td class="kapital"><?php echo $row['berat_badan']; ?></td>
    <td class="kapital"><?php echo $row['riwayat_penyakit']; ?></td>
    <td class="kapital"><?php echo $row['status_keluarga']; ?></td>
    <td class="kapital"><?php echo $row['anak_ke']; ?></td>
    <td class="kapital"><?php echo $row['jml_saudara']; ?></td>
    <td class="kapital"><?php echo $row['mode_transportasi']; ?></td>
    <td class="kapital"><?php echo $row['tempat_tinggal']; ?></td>
    <td class="kapital"><?php echo $row['jarak_rumah']; ?></td>
    <td class="kapital"><?php echo $row['titik_koordinat']; ?></td>
    <td class="kapital"><?php echo $row['hobi']; ?></td>
    <td class="kapital"><?php echo $row['prestasi']; ?></td>
    <td class="kapital"><?php echo 'Dusun. '.$row['dusun'].' RT/RW '.$row['rt'].'/'.$row['rw'].' Desa. '.$row['desa'].' Kec. '.$row['kecamatan'].' Kabupaten. '.$row['kabupaten'].' provinsi '.$row['provinsi'].''; ?></td>  
    <td class="kapital"><?php echo $row['kontak_siswa']; ?></td>        
    <td class="kapital"><?php echo $row['jurusan']; ?></td>
    <td class="kapital"><?php echo $row['jalur_pendaftaran']; ?></td>
    <td class="kapital"><?php echo $row['kelas']; ?></td>
    <td class="kapital"><?php echo $row['no_kks']; ?></td>
    <td class="kapital"><?php echo $row['no_pkh']; ?></td>
    <td class="kapital"><?php echo $row['no_kip']; ?></td>
    <td class="kapital"><?php echo $row['kode_daftar']; ?></td>
    <td class="kapital"><?php echo $row['tgl_pendaftaran']; ?></td>
    <td class="kapital"><?php echo $row['tgl_update']; ?></td>
    <td class="kapital"><?php echo $row['nama_ayah']; ?></td>
     <td class="kapital"><?php echo '"'.$row['nik_ayah'].'"'; ?></td>
    <td class="kapital"><?php echo $row['tgl_ayah']; ?></td>
    <td class="kapital"><?php echo $row['status_ayah']; ?></td>
    <td class="kapital"><?php echo $row['pendidikan_ayah']; ?></td>
    <td class="kapital"><?php echo $row['pekerjaan_ayah']; ?></td>
    <td class="kapital"><?php echo $row['penghasilan_ayah']; ?></td>
    <td class="kapital"><?php echo $row['nama_ibu']; ?></td>
    <td class="kapital"><?php echo '"'.$row['nik_ibu'].'"'; ?></td>
    <td class="kapital"><?php echo $row['tgl_ibu']; ?></td>
    <td class="kapital"><?php echo $row['status_ibu']; ?></td>
    <td class="kapital"><?php echo $row['pendidikan_ibu']; ?></td>
    <td class="kapital"><?php echo $row['pekerjaan_ibu']; ?></td>
    <td class="kapital"><?php echo $row['penghasilan_ibu']; ?></td>
    <td class="kapital"><?php echo $row['nama_wali']; ?></td>
    <td class="kapital"><?php echo '"'.$row['nik_wali'].'"'; ?></td>
    <td class="kapital"><?php echo $row['tgl_wali']; ?></td>
    <td class="kapital"><?php echo $row['pendidikan_wali']; ?></td>
    <td class="kapital"><?php echo $row['pekerjaan_wali']; ?></td>
    <td class="kapital"><?php echo $row['penghasilan_wali']; ?></td>
    <td class="kapital"><?php echo $row['asal_sekolah']; ?></td>
    <td class="kapital"><?php echo $row['nama_sekolah']; ?></td>
    <td class="kapital"><?php echo $row['status_sekolah']; ?></td>
    <td class="kapital"><?php echo $row['alamat_sekolah']; ?></td>
    <td><?php echo $row['no_skhun']; ?></td>
    <td><?php echo $row['no_ijazah']; ?></td>
    <td ><?php echo $row['ipa_1']; ?></td>
    <td ><?php echo $row['matematika_1']; ?></td>
    <td ><?php echo $row['indonesia_1']; ?></td>
    <td ><?php echo $row['inggris_1']; ?></td>
    <?php $d1=NilaiRaport($row['ipa_1'],$row['matematika_1'], $row['indonesia_1'], $row['inggris_1']);  ?>
    <td><?php echo $row['ipa_2']; ?></td>
    <td><?php echo $row['matematika_2']; ?></td>
    <td><?php echo $row['indonesia_2']; ?></td>
    <td><?php echo $row['inggris_2']; ?></td>
    <?php $d2=NilaiRaport($row['ipa_2'],$row['matematika_2'], $row['indonesia_2'], $row['inggris_2']);  ?>
    <td><?php echo $row['ipa_3']; ?></td>
    <td><?php echo $row['matematika_3']; ?></td>
    <td><?php echo $row['indonesia_3']; ?></td>
    <td><?php echo $row['inggris_3']; ?></td>
    <?php $d3=NilaiRaport($row['ipa_3'],$row['matematika_3'], $row['indonesia_3'], $row['inggris_3']);  ?>
    <td><?php echo $row['ipa_4']; ?></td>
    <td><?php echo $row['matematika_4']; ?></td>
    <td><?php echo $row['indonesia_4']; ?></td>
    <td><?php echo $row['inggris_4']; ?></td>
    <?php $d4=NilaiRaport($row['ipa_4'],$row['matematika_4'], $row['indonesia_4'], $row['inggris_4']);  ?>
    <td><?php echo $row['ipa_5']; ?></td>
    <td><?php echo $row['matematika_5']; ?></td>
    <td><?php echo $row['indonesia_5']; ?></td>
    <td><?php echo $row['inggris_5']; ?></td>
    <?php $d5=NilaiRaport($row['ipa_5'],$row['matematika_5'], $row['indonesia_5'], $row['inggris_5']);  ?>
    <td style="color:red;"><?php echo Nilai_Rata_Raport($d1,$d2,$d3,$d4,$d5); ?></td>
  </tr>
    <?php $no ++; } ?>
</table>
</body>
</html>

