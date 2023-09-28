<?php
/*

Programmer Name : Ahmad Zaelani
Site : https://root93.co.id
WhatsApp : 087870693200
*/
function SessionUserCek(){
	if(!isset($_SESSION['username'])){

		return true;
	}else{
		return false;
	}
}

function SessionActive(){
	global $DSessionArray;
	$DSessionArray=array(
		$_SESSION['id'],
		$_SESSION['nama'],
		$_SESSION['email'],
		$_SESSION['username']
		
	);
	

}

function DeleteSession($DSessionArray){
	unset($DSessionArray);
	session_destroy();
	header("location:login");

}
?>