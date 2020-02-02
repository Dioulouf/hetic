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

    <form action="" method="get" class="form-example">
        <div class="form-example">
            <label for="name">Name : </label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="form-example">
            <label for="first-name">First-name : </label>
            <input type="text" name="first-name" id="first-name" required>
        </div>
        <div class="form-example">
            <label for="email">Enter your email : </label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="form-example">
            <label for="message">Your message : </label>
            <input type="textarea" name="message" id="message" required>
        </div>
        <div class="form-example">
            <input type="submit" value="Subscribe!">
        </div>
    </form>
        










</main>
<?php include 'footer.php' ?>