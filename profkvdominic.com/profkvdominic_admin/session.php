<?php
ob_start();

if(isset($_SESSION["LogUserID"]) || ($_SESSION["Loguser_name"])){	
}else{
	header("Location:index.php");
	exit;
}

?>
