<?php 
$activePage = "Concact | contactez-nous pour avoir plus d'informations";
$chiffreMystere = htmlentities($_GET[chiffre]) ; 
$message = null;


function messageMyster () {
    if ($chiffreMystere < 150) {
        $message = "le chiffre à trouver est plus grand";
    } else if ($chiffreMystere > 150) {
        $message = "le chiffre à trouver est plus petit";
    } else {
        $message = "BRAVO ! Vous avez trouvé le bon chiffre";
    }
    return $message;
};

include 'header.php';
?>


<main>

    <h1>Formulaire</h1>

    <form action="contact.php" method="get">
        <input type="number" class="entrer-chiffre" value='<?php echo $chiffreMystere;?>' name="chiffre" placeholder="entre un chiffre en 0 et 150">
        <button type="submit">Deviner</button>
    </form>


   <p><?php echo messageMyster();?></p>
        










</main>
<?php include 'footer.php' ?>