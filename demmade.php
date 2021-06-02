<?php ?>
<!DOCTYPE html>
<html>
<head>
	<title>Consulter les Demande</title>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="Annonce.css">
</head>
<body>
	<div class="topnav">
  <a class="active" href="acceuil.html">Acceuille</a>
  <a href="annonce.php?page=0">Annonce</a>
  <a href="demmade.php?page=0">Demmands</a>
  <a href="manage_connection.php">Connection</a>
</div>
<div>
	
				<label>Quatier</label>
				<select>
					<option>PK10</option>
				</select>
				<label>Type</label>
				<select>
					<option>Appartement</option>
					<option>Maison</option>
					<option>Terrain</option>
					<option>Local Commercial</option>
					<option>Immeuble</option>
					<option>Boutique</option>
					<option>Bureau</option>
					<option>Ferme</option>
					<option>Autres</option>
				</select>
				<input type="text">
				<input type="text">
				<a href="add_annonce.html"><button>Poster</button></a>
</div>
<?php 
include_once('connection_bdd.php');

if($_GET['page']==0)
$sql="select * from demand";

if($_GET['page']==1)
$sql="SELECT * FROM `demand` WHERE prix<".$_POST['prix']." and superficie>".$_POST['superficie']." and type='".$_POST['type']."' and quatier='".$_POST['quatier']."' 'achat/location'='".$_POST['choix1']."' ";

$resultat =$conn->query($sql);
foreach($resultat as $row){?>
<html>
<table border="2">
	<tr>
		<td>
			<table border="2">
				<tr><td><?php echo $row['titre']?></td></tr>
				<tr><td height=10%">superficie: <?php echo $row['superficie'] ?> m<sup>2</sup> Prix mensuelle <?php echo $row['prix']?> CFA</td></tr>
				<tr><td ><?php echo $row['achat/location'] ?> <?php echo $row['quatier']?> <?php echo $row['type']?></td></tr>
				<tr><td><?php echo $row['preambule']?></td></tr>
			</table>
		</td>
	</tr>
</table></html>
<?php }?>
</body>
</html>
<?php ?>
