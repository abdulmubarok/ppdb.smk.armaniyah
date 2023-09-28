<?php
session_start();
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=export_kelas.xls");
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
	if(!Export_Kelas($_GET['kelas'])){
            die("Error  Not Found");
    	}
    
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
    
        <tr>
            <thead>
                <tr>
                    <th colspan="3">ABSENSI KELAS <?php echo $kelas; ?></th>
                </tr>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>P/W</th>
                
            </tr>
            </thead>
        </tr>
        <?php
        $awal=0;
        $no=$awal+1;
        $Export=Export_SaveKelas($kelas);
        while($row=$Export->fetch_array()){
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td class="kapital"><?php echo $row['nama']; ?></td>
            <td class="kapital"><?php echo substr($row['jl'],0,1); ?></td>
          
        </tr>
    <?php $no++; }

    $Export->free_result();

    ?>

    </table>
</body>
</html>

