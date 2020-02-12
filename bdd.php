<?php 
$activePage = "ma super bdd";
include 'header.php';

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=entreprise;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM employes');
$prenom = $bdd->query('SELECT prenom FROM employes');


// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch()){
?>
 <p><?php echo $donnees['nom'] ?></p>
 <?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?>




<?php include 'footer.php' ?>