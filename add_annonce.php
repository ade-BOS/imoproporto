<?php  
include_once('connection_bdd.php');

$file = $_FILES['fic']['tmp_name'];
$image = addslashes(file_get_contents($file));

$max_id = $conn->query("select max(id) from annonce;");
foreach ($max_id as $row) {
}
$id=$row['max(id)']+1;

$sql="INSERT INTO `annonce` (`id`, `titre`, `preambule`, `prix`, `id_auteur`, `superficie`,`achat/location`,`quatier`,`type`, `photo`) VALUES ('$id', '".$_POST['titre']."', '".$_POST['preambule']."', '".$_POST['prix']."', '2', '".$_POST['superficie']."','".$_POST['choix']."','".$_POST['quatier']."','".$_POST['type']."', '2');";

print($conn->exec($sql));
print($sql);

?>