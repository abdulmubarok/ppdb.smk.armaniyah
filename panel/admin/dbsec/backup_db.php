<?php
    session_start();
    require_once '../../core/session.php';
    require_once '../../../config/database.php';    
    require_once '../../core/function.php';
    if(AdministratorCek()):
        die("error");
    else:
        UserAktif(); 
        $admin_uid=$DataUser[0];
        $admin_username=$DataUser[1];
        $admin_email=$DataUser[2];
        $admin_nama=$DataUser[3];
        $admin_role=$DataUser[4];
        $admin_foto=$DataUser[5]; 
       
    endif;
    $AdminData=AdminData($admin_uid);
    $Admin_row=$AdminData->fetch_array();
    $AdminData->free_result();
    $d=(DB_NAME);
    $d.='.sql';
?>

<?php Backup_Database(); ?>