<?php
ob_start();
session_start();

//page we came from
$current_file = $_SERVER['SCRIPT_NAME'];
if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])){
	$http_referer = $_SERVER['HTTP_REFERER'];
}

	function logged(){
		if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
			return true;
		}else{
			return false;
		}
	}
	function getuserfeild($feild){
		$query = "SELECT `$feild` FROM `register` WHERE `id` = '".$_SESSION['id']."'";
		if($query_run = mysql_query($query)){
			if($query_result = mysql_result($query_run , 0, $feild)){
				return $query_result;
			}
		}
		
	}
?>