<?php
session_start();
header("Content-type: application/octet-stream");
header("Pragma: no-cache");
header("Expires: 0");
header("Content-Disposition: attachment; filename=export_semua.xls");
require_once '../core/session.php';
if(AdministratorCek()):
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
            <td colspan="60" align="center"> <h3>DATA SEMUA PENDAFTAR</h3></td>
        </tr>
        <tr>
            <thead>
                <th colspan="33">DATA PRIBADI</th>
                <th colspan="20">DATA ORANGTUA</th>
                <th colspan="7">DATA ASAL SEKOLAH</th>

            </thead>
        </tr>
  <tr>
        <td><b><b>NO</b></b></td>
    <td><b><b>STATUS PENDAFTARAN</b></b></td>
    <td><b><b>NAMA</b></b></td>
    <td><b><b>NISN</b></b></td>
    <td><b><b>NIK</b> </b></td>
    <td><b><b>NO. KARTU KELUARGA</b> </b></td>
    <td><b><b>TMPT TGL LAHIR</b> </b></td>
    <td><b><b>J/L</b> </b></td>
    <td><b>AGAMA</b></td>
    <td><b>GOL. DARAH</b></td>
    <td><b>TINGGI BADAN</b></td>
    <td><b>BERAT BADAN</b></td>
    <td><b>RIWAYAT PENYAKIT</b></td>
    <td><b>STATUS DLM KELUARGA</b></td>
    <td><b>ANAK KE</b></td>
    <td><b>JUMLAH SAUDARA</b></td>
    <td><b>MODE TRANSPORTASI</b></td>
    <td><b>TEMPAT TINGGAL</b></td>
    <td><b>JARAK RUMAH</b></td>
    <td><b>TITIK KOORDINAT</b></td>
    <td><b>HOBI</b></td>
    <td><b>PRESTASI</b></td>
    <td><b>ALAMAT</b></td>
    <td><b>KONTAK</b></td>
    <td><b>JURUSAN</b></td>
    <td><b>JALUR DAFTAR</b></td>
    <td><b>KELAS</b></td> 
    <td><b>NO KKS</b></td>
    <td><b>NO PKH</b></td>
    <td><b>NO KIP</b></td>             
    <td><b>KODE DAFTAR</b></td>
    <td><b>TGL.DAFTAR</b></td>
    <td><b>TGL.UPDATE</b></td>
    <td><b>NAMA AYAH</b></td>
    <td><b>NIK</b></td>
    <td><b>TEMPAT TGL LAHIR</b></td>
    <td><b>STATUS</b></td>
    <td><b>PENDIDIKAN</b></td>
    <td><b>PEKERJAAN</b></td>
    <td><b>PENGHASILAN</b></td>
    <td><b>NAMA IBU</b></td>
    <td><b>NIK</b></td>
    <td><b>TEMPAT TGL LAHIR</b></td>
    <td><b>STATUS</b></td>
    <td><b>PENDIDIKAN</b></td>
    <td><b>PEKERJAAN</b></td>
    <td><b>PENGHASILAN</b></td>
    <td><b>NAMA WALI</b></td>
    <td><b>NIK</b></td>
    <td><b>TEMPAT TGL LAHIR</b></td>
    <td><b>PENDIDIKAN</b></td>
    <td><b>PEKERJAAN</b></td>
    <td><b>PENGHASILAN</b></td>
    <td><b>ASAL SEKOLAH</b></td>
    <td><b>NAMA SEKOLAH</b></td>
    <td><b>STATUS SEKOLAH</b></td>
    <td><b>ALAMAT</b></td>
    <td><b>NO SERI SKHUN</b></td>
    <td><b>NO SERI IJAZAH</b></td>
    <td><b>NILAI RAPORT</b></td>
  </tr>
  <?php
        $no=1;
        $Export=Export_Semua();
        while($row=$Export->fetch_array()){
        ?>
  <tr style="text-transform:uppercase;">
    <td><?php echo $no; ?></td>
    <td class="kapital"><?php echo $row['status_pendaftaran']; ?> </td>
    <td class="kapital"><?php echo $row['nama']; ?> </td>
    <td class="kapital"><?php echo '"'.$row['nisn'].'"'; ?></td>
    <td class="kapital"><?php echo '"'.$row['no_ktp']; ?></td>
    <td class="kapital"><?php echo '"'.$row['no_kk'].'"'; ?></td>
    <td class="kapital"><?php echo $row['tempat_lahir'].','.$row['tanggal_lahir']; ?></td>
    <td class="kapital"><?php echo substr($row['jl'],0,1); ?></td>
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
    <?php $d1=NilaiRaport($row['ipa_1'],$row['matematika_1'], $row['indonesia_1'], $row['inggris_1']);  ?>
    <?php $d2=NilaiRaport($row['ipa_2'],$row['matematika_2'], $row['indonesia_2'], $row['inggris_2']);  ?>
    <?php $d3=NilaiRaport($row['ipa_3'],$row['matematika_3'], $row['indonesia_3'], $row['inggris_3']);  ?>
    <?php $d4=NilaiRaport($row['ipa_4'],$row['matematika_4'], $row['indonesia_4'], $row['inggris_4']);  ?>
    <?php $d5=NilaiRaport($row['ipa_5'],$row['matematika_5'], $row['indonesia_5'], $row['inggris_5']);  ?>
    <td style="color:red;"><?php echo Nilai_Rata_Raport($d1,$d2,$d3,$d4,$d5); ?></td>
  </tr>
    <?php $no ++; } ?>
</table>
</body>
</html>

