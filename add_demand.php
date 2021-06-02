<?php  
include_once('connection_bdd.php');

$max_id = $conn->query("select max(id) from demand;");
foreach ($max_id as $row) {
}
$id=$row['max(id)']+1;

$sql="INSERT INTO `demand` (`id`, `titre`, `preambule`, `prix`, `id_auteur`, `superficie`,`achat/location`,`quatier`,`type`) VALUES ('$id', '".$_POST['titre']."', '".$_POST['preambule']."', '".$_POST['prix']."', '2', '".$_POST['superficie']."','".$_POST['choix1']."','".$_POST['quatier']."','".$_POST['type']."');";

print($conn->exec($sql));
print($sql);

?>