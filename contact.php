<?php 
$activePage = "Contact | contactez-nous pour avoir plus d'informations";
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
    <div class="banniere-form">
        <h1>Contact</h1>
    </div>

    <form action="contact-cible.php" method="post">
        <div class="form-example">
            <label for="name">Last-name : </label>
            <input type="text" name="name" id="name" value="<?php echo $_GET["nom"];?>" required>
        </div>
        <div class="form-example">
            <label for="first-name">First-name : </label>
            <input type="text" name="first-name" id="first-name" value="<?php echo $_GET["prenom"];?>" required>
        </div>
        <div class="form-example">
            <label for="email">Enter your email : </label>
            <input type="email" name="mail" id="email" required>
        </div>
        <div class="form-example">
            <label for="message">Your request : </label>
            <!-- <input type="textarea" name="message" id="message" required> -->
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Your request..."></textarea>
        </div>
        <div class="form-example">
            <button type="submit">submit</button>
        </div>
    </form>
        










</main>
<?php include 'footer.php' ?>