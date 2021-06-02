<!DOCTYPE html>
<html>
<head>
	<title>Deconection</title>
</head>
<body>
	<form method="POST" action="deconnexion.php?page=1">
		<input type="submit" value="DECONEXION">
	</form>
</body>
</html>
<?php 
if($_GET['page']==1){
	session_start();
	$_SESSION=array();
	session_destroy();

}
?>
