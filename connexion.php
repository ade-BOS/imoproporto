<!DOCTYPE html>
<html>
<head>
	<title>connexion</title>
</head>
<body>
	<form method="POST" action="connexion.php?page=1"><table>
		<tr>
			<td><label>Pseudo: </label></td>
			<td><input type="text" name="pseudo"></td>
		</tr>
		<tr>
			<td><label>Mot de passe</label></td>
			<td><input type="passwd" name="pass"> </td>
		</tr>
		<tr>
			<td><label>Connexion automatique</label></td>
			<td><input type="radio" name="conn"> </td>
		</tr>
		<tr>
			<td><a href="inscription.php?page=0">s'inscrit</a></td>
		</tr>
		<tr>
			<td><input type="reset"></td>
			<td><input type="submit"></td>
		</tr>
	</table></form>

</body>
</html>
<?php 
session_start();
if($_GET['page']==1){
include_once('connection_bdd.php');

$sql="SELECT `id`,`pass` from inscrit WHERE pseudo='".$_POST['pseudo']."';";
$resultat =$conn->query($sql);
foreach($resultat as $row){}

if(!$resultat){
	echo 'Mauvais identifiant ou mot de passe!';
}else{
	if(password_verify($_POST['pass'],$row['pass'])){
		session_start();
		$_SESSION['id']=$row['id'];
		$_SESSION['pseudo']=$_POST['pseudo'];
		print($_SESSION['id']);
	}else{
	echo 'Mauvais identifiant ou mot de passe!';
	}
}
}
?>