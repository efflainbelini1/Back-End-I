
<?php require_once("header.php"); ?>
 
<?php
if(@!$_GET["page"]){	
	$page = "pagina1";
}else if((!file_exists($_GET["page"].".php"))){
	$error = 1;
	$page = "contato";
}else{
	$page = $_GET["page"];
}
require_once($page.".php");
?>	

<?php require_once("footer.php"); ?>
<link rel="stylesheet" type="text/css" href="css/stile.css">
