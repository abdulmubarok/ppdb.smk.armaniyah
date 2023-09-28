<?php
session_start();
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=export_nilai.xls");
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
   
    <table border="1">
        <tr>
            <td colspan="26" align="center"> <h3>DATA SEMUA NILAI</h3></td>
        </tr>
  <tr>
    <td><b>NO</b></td>
    <td><b>NAMA</b></td>
    <td><b>NISN</b></td>
    <td><b>ASAL SEKOLAH</b> </td>
    <td><b>STATUS PENDAFTARAN</b> </td>
    <td colspan="20" align="center"><b>NILAI RAPORT</b></td> 
    <td rowspan="2" align="center">RATA - RATA</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
 

    <td colspan="4" align="center" style="color:white; background-color: red;">SMT 1 </td>
    <td colspan="4" align="center" style="color:white; background-color: blue;">Semester 2 </td>
    <td colspan="4" align="center" style="color:black; background-color: yellow;">Semester 3 </td>
    <td colspan="4" align="center" style="color:white; background-color: green;">Semester 4</td>
    <td colspan="4" align="center" style="color:black; background-color: pink;">Semester 5</td>
   
    
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>

   
    <td style="color:white; background-color: red;">IPA</td>
    <td style="color:white; background-color: red;">MAT</td>
    <td style="color:white; background-color: red;">IND</td>
    <td style="color:white; background-color: red;">ING</td>

    <td style="color:white; background-color: blue;">IPA</td>
    <td style="color:white; background-color: blue;">MAT</td>
    <td style="color:white; background-color: blue;">IND</td>
    <td style="color:white; background-color: blue;">ING</td>

    <td style="color:black; background-color: yellow;">IPA</td>
    <td style="color:black; background-color: yellow;">MAT</td>
    <td style="color:black; background-color: yellow;">IND</td>
    <td style="color:black; background-color: yellow;">ING</td>

    <td style="color:white; background-color: green;">IPA</td>
    <td style="color:white; background-color: green;">MAT</td>
    <td style="color:white; background-color: green;">IND</td>
    <td style="color:white; background-color: green;">ING</td>

    <td style="color:black; background-color: pink;">IPA</td>
    <td style="color:black; background-color: pink;" >MAT</td>
    <td style="color:black; background-color: pink;">IND</td>
    <td style="color:black; background-color: pink;">ING</td>

 

    <td>&nbsp;</td>
  </tr>
  <?php
        $no=1;
        $Export=Export_Nilai();
        while($row=$Export->fetch_array()){
        ?>
  <tr>
    <td><?php echo $no; ?></td>
    <td class="kapital"><?php echo $row['nama']; ?> </td>
    <td><?php echo $row['nisn']; ?></td>
    <td class="kapital"><?php echo $row['nama_sekolah']; ?> </td>
    <td class="kapital"><?php echo $row['status_pendaftaran']; ?> </td>
 
    <td style="color:white; background-color: red;"><?php echo $row['ipa_1']; ?></td>
    <td style="color:white; background-color: red;"><?php echo $row['matematika_1']; ?></td>
    <td style="color:white; background-color: red;"><?php echo $row['indonesia_1']; ?></td>
    <td style="color:white; background-color: red;"><?php echo $row['inggris_1']; ?></td>
    <?php $d1=NilaiRaport($row['ipa_1'],$row['matematika_1'], $row['indonesia_1'], $row['inggris_1']);  ?>

    <td style="color:white; background-color: blue;"><?php echo $row['ipa_2']; ?></td>
    <td style="color:white; background-color: blue;"><?php echo $row['matematika_2']; ?></td>
    <td style="color:white; background-color: blue;"><?php echo $row['indonesia_2']; ?></td>
    <td style="color:white; background-color: blue;"><?php echo $row['inggris_2']; ?></td>
    <?php $d2=NilaiRaport($row['ipa_2'],$row['matematika_2'], $row['indonesia_2'], $row['inggris_2']);  ?>

    <td style="color:black; background-color: yellow;"><?php echo $row['ipa_3']; ?></td>
    <td style="color:black; background-color: yellow;"><?php echo $row['matematika_3']; ?></td>
    <td style="color:black; background-color: yellow;"><?php echo $row['indonesia_3']; ?></td>
    <td style="color:black; background-color: yellow;"><?php echo $row['inggris_3']; ?></td>
    <?php $d3=NilaiRaport($row['ipa_3'],$row['matematika_3'], $row['indonesia_3'], $row['inggris_3']);  ?>

    <td style="color:white; background-color: green;"><?php echo $row['ipa_4']; ?></td>
    <td style="color:white; background-color: green;"><?php echo $row['matematika_4']; ?></td>
    <td style="color:white; background-color: green;"><?php echo $row['indonesia_4']; ?></td>
    <td style="color:white; background-color: green;"><?php echo $row['inggris_4']; ?></td>
    <?php $d4=NilaiRaport($row['ipa_4'],$row['matematika_4'], $row['indonesia_4'], $row['inggris_4']);  ?>

    <td style="color:black; background-color: pink;"><?php echo $row['ipa_5']; ?></td>
    <td style="color:black; background-color: pink;"><?php echo $row['matematika_5']; ?></td>
    <td style="color:black; background-color: pink;"><?php echo $row['indonesia_5']; ?></td>
    <td style="color:black; background-color: pink;"><?php echo $row['inggris_5']; ?></td>
    <?php $d5=NilaiRaport($row['ipa_5'],$row['matematika_5'], $row['indonesia_5'], $row['inggris_5']);  ?>

    
   
    <td style="color:red;"></td>
  </tr>
    <?php $no ++; } ?>
</table>
</body>
</html>

