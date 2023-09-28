<?php
session_start();
$Dok=trim($_GET['nomor']);
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$Dok.xls");
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
	if(!DataPendaftarDetail($_GET['id'])){
            die("Error id Not Found");
    		}
    if(empty($tanggal_lahir)):         
        $tgl=NULL; 
    else:
        $tgl=explode("-", $tanggal_lahir); 
    endif;
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
	<table border="1">
		<?php
		
		echo '
		<tr>
			<td colspan="2"><b>DATA PENDAFTAR</b></td>
			
		</tr>
		 <tr>
            <td>No. Pendaftaran</td>
            <td>'.$nomor_pendaftaran.'</td>
        </tr>
                                                   
        <tr>
            <td>No. KTP</td>
            <td>"'.$no_ktp.'"</td>
        </tr>
        <tr>
            <td>No. Kartu Keluarga</td>
            <td>"'.$no_kk.'"</td>
        </tr>
        <tr>
            <td>NISN</td>
            <td>"'.$nisn.'"</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>'.$nama.'</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>'.$jenis_kelamin.'</td>
        </tr>
        <tr>
            <td>Tempat/Tgl. Lahir</td>
            <td>'.$tempat_lahir.', '.$tgl[2].'-'.$tgl[1].'-'.$tgl[0].'</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>'.$agama.'</td>
        </tr>
        <tr>
            <td>Golongan Darah</td>
            <td>'.$golongan_darah.'</td>
        </tr>
        <tr>
            <td>Tinggi/Berat Badan</td>
            <td>'.$tinggi_badan.'cm/'.$berat_badan.'kg</td>
        </tr>
        <tr>
            <td>Riwayat Penyakit</td>
            <td>'.$riwayat_penyakit.'</td>
        </tr>
        <tr>
            <td>Status Keluarga</td>
            <td>'.$status_keluarga.'</td>
        </tr>
        <tr>
            <td>Anak ke</td>
            <td>'.$anak_ke.'</td>
        </tr>                                                 
        <tr>
            <td>Jumlah Saudara</td>
            <td>'.$jml_saudara.'</td>
        </tr>
        <tr>
            <td>Mode Transportasi</td>
            <td>'.$mode_transportasi.'</td>
        </tr>
        <tr>
            <td>Tempat Tinggal</td>
            <td>'.$tempat_tinggal.'</td>
        </tr>
        <tr>
            <td>Jarak Rumah</td>
            <td>'.$jarak_rumah.'</td>
        </tr>
        <tr>
            <td>Titik Koordinat</td>
            <td>'.$titik_koordinat.'</td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>'.$hobi.'</td>
        </tr>
        <tr>
            <td>Prestasi</td>
            <td>'.$prestasi.'</td>
        </tr>
        <tr>
            <td>Alamat Lengkap</td>
            <td> Dusun '.$dusun.' RT/RW'.$rt.' /'.$rw.' Desa '.$desa.' Kec '.$kecamatan.' '.$kabupaten.'</td>
        </tr>
        <tr>
            <td>Dusun</td>
            <td>'.$dusun.'</td>
        </tr>
        <tr>
            <td>RT</td>
            <td>'.$rt.'</td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>'.$jurusan.'</td>
        </tr>
        <tr>
            <td>Jalur Pendaftaran</td>
            <td>'.$jalur_pendaftaran.'</td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>'.$kelas.'</td>
        </tr>
        <tr>
            <td>NO. KKS</td>
            <td>'.$no_kks.'</td>
        </tr>
        <tr>
            <td>NO. PKH</td>
            <td>'.$no_pkh.'</td>
        </tr>
        <tr>
            <td>NO. KIP</td>
            <td>'.$no_kip.'</td>
        </tr>
        <tr>
            <td>Tgl. Pendaftaran</td>
            <td>'.$tgl_pendaftaran.'</td>
        </tr>
        <tr>
            <td>Tgl. Update</td>
            <td>'.$tgl_update.'</td>
        </tr>
        <tr>
            <td>Status Pendaftaran</td>
            <td>'.$status_pendaftaran.'</td>
        </tr>
        <tr>
            <td><h5>Verifikator Pendaftar</h5></td>
            <td>'.$verifikator_pendaftar.'</td>
        </tr>
		<tr>
            <td colspan="2"><b>DATA AYAH</b></td>                                      
        </tr>
        <tr>
            <td>Nama</td>
            <td>'.$nama_ayah.'</td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>"'.$nik_ayah.'"</td>
        </tr>
        <tr>
            <td>Tempat Tgl. Lahir</td>
            <td>'.$tgl_ayah.'</td>
        </tr>
        <tr>
            <td>Status</td>
            <td>'.$status_ayah.'</td>
        </tr>
        <tr>
            <td>Pendidikan</td>
            <td>'.$pendidikan_ayah.'</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>'.$pekerjaan_ayah.'</td>
        </tr>
        <tr>
            <td>Penghasilan</td>
            <td>'.$penghasilan_ayah.'</td>
        </tr>
        <tr>
            <td colspan="2"><b>DATA IBU</b></td>
        </tr>
       <tr>
            <td>Nama</td>
            <td>'.$nama_ibu.'</td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>"'.$nik_ibu.'"</td>
        </tr>
        <tr>
            <td>Tempat Tgl. Lahir</td>
            <td>'.$tgl_ibu.'</td>
        </tr>
        <tr>
            <td>Status</td>
            <td>'.$status_ibu.'</td>
        </tr>
        <tr>
            <td>Pendidikan</td>
            <td>'.$pendidikan_ibu.'</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>'.$pekerjaan_ibu.'</td>
        </tr>
        <tr>
            <td>Penghasilan</td>
            <td>'.$penghasilan_ibu.'</td>
        </tr>
        <tr>
            <td>Kontak</td>
            <td>'.$kontak_ortu.'</td>
        </tr>
        <tr>
            <td colspan="2"><b>DATA WALI</b></td>               
        </tr>
        <tr>
            <td>Nama</td>
            <td>'.$nama_wali.'</td>
        </tr> 
        <tr>
            <td>NIK Wali</td>
            <td>"'.$nik_wali.'"</td>
        </tr>
        <tr>
            <td>Tempat Tgl Lahir</td>
            <td>'.$tgl_wali.'</td>
        </tr>                                                   
        <tr>
            <td>Pendidikan</td>
            <td>'.$pendidikan_wali.'</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>'.$pekerjaan_wali.'</td>
        </tr>
        <tr>
            <td>Penghasilan</td>
            <td>'.$penghasilan_wali.'</td>
        </tr>
        <tr>
            <td>Kontak Wali</td>
            <td>'.$kontak_wali.'</td>
        </tr>
      
         <tr>
            <td colspan="2"><b>ASAL SEKOLAH<b></td>               
        </tr>
        <tr>
            <td>Asal Sekolah</td>
            <td>'.$asal_sekolah.'</td>
        </tr>
        <tr>
            <td>Nama Sekolah</td>
            <td>'.$nama_sekolah.'</td>
        </tr>
        <tr>
            <td>Status</td>
            <td>'.$status_sekolah.'</td>
            </tr>
        <tr>
            <td>Alamat</td>
            <td>'.$alamat_sekolah.'</td>
        </tr>
        <tr>
            <td>No SKHUN</td>
            <td>'.$no_skhun.'</td>
        </tr>
        <tr>
            <td>No. Ijazah</td>
            <td>'.$no_ijazah.'</td>
        </tr>
		';

		?>
	</table>
	<table border="1"> 				
				  <thead>
				  <tr>
				  	<th colspan="6"><div align="center">Data Nilai Raport 5 Semester</div></th>
				  <tr>
				    <th rowspan="2">Smt</th>
				    <th colspan="5"><div align="center">Mata Pelajaran </div></th>
				  </tr>
				   <tr>
				    <th>Ipa</th>				
				    <th>Matematika</th>
				    <th>Bhs. Indonesia </th>
				    <th>Bhs. Inggris </th>
				    <th>N.Rata2</th>
				  </tr>
				  </thead>
				   <tbody>
				 
				  <tr>
				    <td>1</td>				 
				    <td><?php echo $ipa_1; ?></td>
				    <td><?php echo $matematika_1; ?></td>
				    <td><?php echo $indonesia_1; ?></td>
				    <td><?php echo $inggris_1; ?></td>
				    <td><?php echo NilaiRaport($ipa_1, $matematika_1, $indonesia_1, $inggris_1); ?></td>
				  </tr>
				  <tr>
				    <td>2</td>
				   
				    <td><?php echo $ipa_2; ?></td>
				    <td><?php echo $matematika_2; ?></td>
				    <td><?php echo $indonesia_2; ?></td>
				    <td><?php echo $inggris_2; ?></td>
				    <td><?php echo NilaiRaport($ipa_2, $matematika_2, $indonesia_2, $inggris_2); ?></td>
				  </tr>
				  <tr>
				    <td>3</td>
				 
				    <td><?php echo $ipa_3; ?></td>
				    <td><?php echo $matematika_3; ?></td>
				    <td><?php echo $indonesia_3; ?></td>
				    <td><?php echo $inggris_3; ?></td>
				    <td><?php echo NilaiRaport($ipa_3, $matematika_3, $indonesia_3, $inggris_3); ?></td>
				  </tr>
				  <tr>
				    <td>4</td>
				  
				 	<td><?php echo $ipa_4; ?></td>
				    <td><?php echo $matematika_4; ?></td>
				    <td><?php echo $indonesia_4; ?></td>
				    <td><?php echo $inggris_4; ?></td>
				    <td><?php echo NilaiRaport($ipa_4, $matematika_4, $indonesia_4, $inggris_4); ?></td>
				  </tr>
				  <tr>
				    <td>5 </td>
			
				    <td><?php echo $ipa_5; ?></td>
				    <td><?php echo $matematika_5; ?></td>
				    <td><?php echo $indonesia_5; ?></td>
				    <td><?php echo $inggris_5; ?></td>
				    <td><?php echo NilaiRaport($ipa_5, $matematika_5, $indonesia_5, $inggris_5); ?></td>
				  </tr>
				  
				  </tbody>
				</table>
				<table border="1">
					<thead> 
					<tr>
						<th colspan="3"><div align="center">Data Nilai UN/US</div></th>
					</tr>
					</tr>	
					  <tr>
					    <th>No.</th>
					    <th>Mata Pelajaran </th>
					    <th>Nilai</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
					    <td>1</td>
					    <td>Bahasa Indonesia </td>
					    <td><?php echo $bahasa_indonesia; ?></td>
					  </tr>
					  <tr>
					    <td>2</td>
					    <td>Bahasa Inggris </td>
					    <td><?php echo $bahasa_inggris; ?></td>
					  </tr>
					  <tr>
					    <td>3</td>
					    <td>Matematika</td>
					    <td><?php echo $matematika; ?></td>
					  </tr>
					  <tr>
					    <td>4</td>
					    <td>Ipa</td>
					    <td><?php echo $ipa; ?></td>
					  </tr>
					  <tr>
					  	<td colspan="2">Rata - Rata</td>
					  	<td><?php echo NilaiUn($bahasa_indonesia, $bahasa_inggris, $matematika, $ipa); ?></td>
					  </tr>
					</tbody>
				</table>
</body>
</html>

