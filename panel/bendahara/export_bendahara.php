<?php
session_start();
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=export_pembayaran.xls");
require_once '../core/session.php';
if(BendaharaCek()):
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
$setting_pembayaran=PengaturanPembayaran();
$jml_bayar=$setting_pembayaran->fetch_array();
$setting_pembayaran->free_result();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Export Data</title>
</head>
<body>
	<table border="1">
	
		<tr>
			<thead>
				<tr>
					<th colspan="7">DATA PEMBAYARAN</th>
				</tr>
			<tr>
				<th>No. Pendaftaran</th>
				<th>NAMA</th>
				<th>KODE REF</th>				
				<th>VERIFIKATOR PEMBAYARAN</th>
				<th>TGL. PEMBAYARAN</th>
				<th>STATUS PEMBAYARAN</th>
				<th>JUMLAH PEMBAYARAN</th>
			</tr>
			</thead>
		</tr>
		<?php
		$Export=Export_Bendahara();
		while($row=$Export->fetch_array()){
		?>
		<tr>
			<td><?php echo $row['nomor_pendaftaran']; ?></td>
			<td><?php echo $row['nama']; ?></td>
			<td><?php echo $row['kode_refrensi']; ?></td>			
			<td><?php echo $row['verifikator_pembayaran']; ?></td>
			<td><?php echo $row['tgl_pembayaran']; ?></td>
			<td><?php echo $row['status_pembayaran']; ?></td>
			<td>
				<?php echo $jml_bayar['jumlah_pembayaran'].$row['kode_refrensi']; ?>
				
			</td>
		</tr>
	<?php } ?>
	</table>
</body>
</html>

