<?php 
$activePage = "Thanks to contact us !";
include 'header.php';
?>

<main>
    <h1>Thanks <?php echo htmlspecialchars($_POST["first-name"]);  ?> to contact us !</h1>
</main>





<?php include 'footer.php' ?>