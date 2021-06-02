<?php
session_start();

if (isset($_SESSION['id'])){
	header('Location: deconnexion.php?page=0');
}
else{
	header('Location: connexion.php?page=0');
}
?>