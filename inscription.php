<Doctype html>
<html>
	<head>
		<title>INSCRIPTION</title>
		<style type="text/css">
			Body{
				background-color:#FFFFF0;
				color:696969;
				font-size: small;
			}
			td{
				text-align:left;
			}
			.class{
				background-color:FFFAFA;
			}
			#enrg{
				text-align: center;
			}
		</style>
		<script type="text/javascript">
			alerte('c,dfjdk')
			let btn=document.getElementById('enrg');
			let pass1=document.getElementById('pass1');
			let pass2=document.getElementById('pass2');
			pass1.style.backgroundColor= "#FFF0F5";
			}
		</script>
	</head>
	<body>
		<center><h1>INSCRIPTION</h1></center>
		<form method="POST" action="inscription.php?page=1">
			<center><table>
				<tr>
					<td>
						<lablel for="num">Pseudo</lablel>
					</td>
					<td>
						<input type="text" id="num" class="class" name="pseudo" />
					</td>
				</tr>
				<tr>
					<td>
						<label for="nom">NOM</label>
					</td>
					<td>
						<input type="text" id="nom" class="class" name="nom"/>
					</td>
				</tr>
				<tr>
					<td>
						<label for="nom">Prénoms</label>
					</td>
					<td>
						<input type="text" id="nom" class="class" name="prenom"/>
					</td>
				</tr>
				<tr>
					<td>
						<label>Retapez votre mot de passe</label>
					</td>
					<td>
						<input type="password" id="pass1" name="pass1">
					</td>
				</tr>
				<tr>
					<td>
						<label>Mot de pass</label>
					</td>
					<td>
						<input type="password" id="pass2" name="pass2">
					</td>
				</tr>
				<tr>
					<td>
						<label for="date">DATE DE NAISSANCE</label>
					</td>
					<td>
						<input type="date" id="date" class="class" name="date_naiss"/>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" value="Enregistrer" id="enrg">
					</td>
					<td>
						<input type="reset" value="Annuler"/>
					</td>
				</tr>
			</table></center>
		</form>
	</body>
</html>
<?php
if($_GET['page']==1){
	if($_POST['pass1']==$_POST['pass2']){

		include_once('connection_bdd.php');

		$max_id = $conn->query("select max(id) from inscrit;");
		foreach ($max_id as $row) {}
		$id=$row['max(id)']+1;

		$pass_hache = password_hash($_POST['pass1'], PASSWORD_DEFAULT);
		print($pass_hache);


		$sql="INSERT INTO `inscrit` (`id`, `pseudo`, `nom`, `prenoms`,`pass`, `date_naiss`) VALUES ('$id', '".$_POST['pseudo']."', '".$_POST['nom']."','".$_POST['prenom']."','$pass_hache','".$_POST['date_naiss']."');";
	print($conn->exec($sql));
	}else{?>
		<html><center><label style="color: red;"><?php print('Mot de passe non identique') ?></label></center></html>
	<?php }} ?>