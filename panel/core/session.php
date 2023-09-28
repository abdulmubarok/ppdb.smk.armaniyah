<?php
function AdministratorCek(){
	if($_SESSION['role']!='administrator'){
		return true;
	}else{
		return false;
	}
}
function BendaharaCek(){
	if($_SESSION['role']!='bendahara'){
		return true;
	}else{
		return false;
	}
}
function VerifikatorCek(){
	if($_SESSION['role']!='verifikator'){
		return true;
	}else{
		return false;
	}
}

function UserAktif(){
	global $DataUser;
	$DataUser=array(
	$_SESSION['uid'],
	$_SESSION['username'],
	$_SESSION['email'],
	$_SESSION['nama'],
	$_SESSION['role'],
	$_SESSION['foto']
	);
}


function UnsetDataUser(){
	unset($DataUser);
	session_destroy();
	echo "<meta http-equiv=\"refresh\"content=\"3;URL=../index.php?page=login\" />";
}
?>

